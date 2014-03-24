<?php

/**
 * Description of BaseController
 *
 */
abstract class BaseController
{

    protected function inputPost($input_name) {
        return filter_input(INPUT_POST, $input_name);
    }
    
    protected function inputServer($input_name) {
        return filter_input(INPUT_SERVER, $input_name);
    }

}
