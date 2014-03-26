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

    /**
     * Convert "d/m/Y" date to "Y-m-d" date
     * 
     * @param type $date_string
     */
    protected function stringToSQL($date_string)
    {
        return implode('-', array_reverse(explode('/', $date_string)));
    }

    /**
     * Convert SQL date to DateTime
     * 
     * @param type $date_string
     */
    protected function SQLToDate($sql_date)
    {
        return new DateTime($sql_date);
    }

}
