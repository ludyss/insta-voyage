<?php

/**
 * Route description
 * 
 * The Route core is a component of the Router core
 * 
 * @author Fabien Morchoisne <f.morchoisne@insta.fr>
 */
class Route
{

    /**
     *
     * @var string The expected uri pattern
     */
    protected $pattern;

    /**
     *
     * @var string The controller name
     */
    protected $controller;

    /**
     *
     * @var string The action name
     */
    protected $action;

    /**
     *
     * @var array The request parameters 
     */
    protected $params = array();

    /**
     *
     * @var array The request allowed methods 
     */
    protected $methods = array();

    /**
     *
     * @var array The parameters values
     */
    protected $values = array();

    /**
     * Construct
     * 
     * @param string $pattern
     * @param string $controller
     * @param string $action
     * @param array $params
     * @param array $methods
     */
    public function __construct($pattern, $controller, $action)
    {
        $this->pattern = $pattern;
        $this->controller = $controller;
        $this->action = $action;
    }

    /**
     * 
     * @return boolean
     */
    public function hasParams()
    {
        return !empty($this->params);
    }

    /**
     * 
     * @return boolean
     */
    public function hasMethods()
    {
        return !empty($this->methods);
    }

    /**
     * 
     * @param string $request The request uri
     * @return boolean
     */
    public function match($request)
    {
        if (preg_match('#^' . $this->pattern . '$#', $request, $matches)) {
            if($this->hasMethods()) {
                return in_array(strtolower(filter_input(INPUT_SERVER, 'REQUEST_METHOD')), $this->methods) ? $matches : FALSE;
            }
            return $matches;
        } else {
            return FALSE;
        }
    }

    /**
     * 
     * @return string  The expected uri pattern
     */
    public function getPattern()
    {
        return $this->pattern;
    }

    /**
     * 
     * @return string The controller name
     */
    public function getController()
    {
        return ucfirst($this->controller);
    }

    /**
     * 
     * @return string The action name
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * 
     * @param array $params The request parameters
     */
    public function setParams(array $params)
    {
        $this->params = $params;
    }

    /**
     * 
     * @return array The request parameters
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * 
     * @param array $params The request allowed methods
     */
    public function setMethods(array $methods)
    {
        $this->methods = $methods;
    }

    /**
     * 
     * @return array The request allowed methods
     */
    public function getMethods()
    {
        return $this->methods;
    }

    /**
     * 
     * @param array $values The parameters values
     */
    public function setValues(array $values)
    {
        $this->values = $values;
    }

    /**
     * 
     * @return array The parameters values
     */
    public function getValues()
    {
        return $this->values;
    }

}
