<?php

/**
 * Description of BaseController
 *
 */
abstract class BaseController
{

    /**
     * Fetch input from POST superglobal
     * 
     * @param string $input_name
     * @return mixed
     */
    protected function inputPost($input_name)
    {
        return filter_input(INPUT_POST, $input_name);
    }

    /**
     * Fetch input from SERVER superglobal
     * 
     * @param string $input_name
     * @return mixed
     */
    protected function inputServer($input_name)
    {
        return filter_input(INPUT_SERVER, $input_name);
    }

    /**
     * Perform redirection
     * 
     * @param string $request
     */
    protected function redirect($request)
    {
        header('location: ' . $request);
        exit;
    }

}
