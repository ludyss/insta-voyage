<?php

/**
 * Description of DefaultController
 *
 */
class DefaultController
{

    public function indexAction()
    {
        $view = './view/default/home.php';
        include './view/template.php';
    }
    
    public function contactAction()
    {
        include './view/default/contact.php';
        //include './view/template.php';
    }

}
