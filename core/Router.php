<?php

require_once 'Route.php';

/**
 * Router description
 * 
 * The Router core perform uri routing
 * 
 * @author Fabien MORCHOISNE <f.morchoisne@insta.fr>
 */
class Router
{

    /**
     * The mapped routes
     * 
     * @var array
     */
    protected $routes = array();

    /**
     * The request uri
     * 
     * @var string
     */
    protected $uri;

    /**
     * The request method
     * 
     * @var array
     */
    protected $method = array();

    /**
     * Construct
     * 
     * @param string $domain The uri base to remove
     */
    public function __construct()
    {
        $this->request = filter_input(INPUT_SERVER, 'REQUEST_URI');
        $this->method = filter_input(INPUT_SERVER, 'REQUEST_METHOD');
        $this->loadConfig();
    }

    /**
     * Map all routes from configuration
     * 
     */
    protected function loadConfig()
    {
        $xml = new \DOMDocument;
        $xml->load('./config/routes.xml');

        $routes = $xml->getElementsByTagName('route');

        foreach ($routes as $route) {
            $this->mapRoute($route);
        }
    }

    /**
     * 
     * @param Route $route
     */
    protected function mapRoute($xmlElement)
    {
        $route = new Route($xmlElement->getAttribute('pattern'), $xmlElement->getAttribute('controller'), $xmlElement->getAttribute('action'));

        if ($xmlElement->hasAttribute('params')) {
            $params = explode(',', $xmlElement->getAttribute('params'));
            $route->setParams($params);
        }

        if ($xmlElement->hasAttribute('methods')) {
            $methods = explode(',', $xmlElement->getAttribute('methods'));
            $route->setMethods($methods);
        }

        $this->addRoute($route);
    }

    /**
     * Add a route to the router
     * 
     * @param Route $route The route to add
     */
    protected function addRoute(Route $route)
    {
        if (!in_array($route, $this->routes)) {
            $this->routes[] = $route;
        }
    }

    /**
     * Run the router for a match then call the route
     * Or display 404 if an exception has been thrown
     * 
     * @return void
     */
    public function run()
    {
        try {
            $match = $this->findRoute($this->request);
            $this->callRoute($match);
        } catch (\RuntimeException $e) {
            include './404.html';
            die;
        }
    }

    /**
     * Parse routes list for a match
     * 
     * @param string $request The request uri
     * @return Route The matched route
     * @throws \RuntimeException
     */
    public function findRoute($request)
    {
        foreach ($this->routes as $route) {

            if (($values = $route->match($request)) !== FALSE) {
                $this->prepareRouteParams($route, $values);
                return $route;
            }
        }

        throw new \RuntimeException('No route matching the request');
    }

    /**
     * Fetch route parameters values from the uri
     * 
     * @param Route $route
     * @param array $values
     */
    protected function prepareRouteParams(Route $route, array $values)
    {
        if ($route->hasParams()) {
            $paramsNames = $route->getParams();
            $paramsList = array();

            foreach ($values as $key => $value) {
                if ($key !== 0) {
                    $paramsList[$paramsNames[$key - 1]] = $value;
                }
            }

            $route->setValues($paramsList);
        }
    }

    /**
     * 
     * @param Route $route
     * @return mixed the return value of the callback, or FALSE on error.
     */
    protected function callRoute(Route $route)
    {
        $controller_name = $route->getController();
        $action_name = $route->getAction();

        if (file_exists('./controller/' . $controller_name . '.php')) {
            require_once './controller/' . $controller_name . '.php';
            
            if (method_exists($controller_name, $action_name)) {
                $controller = new $controller_name();
                
                return call_user_func_array(array($controller, $action_name), $route->getValues());
                
            } else {
                throw new \RuntimeException($action_name . ' action not found in ' . $controller_name . ' controller class');
            }
            
        } else {
            throw new \RuntimeException($controller_name . ' class file not found');
        }
    }

}
