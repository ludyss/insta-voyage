<?php

/**
 * Description of DefaultController
 *
 */
class DefaultController
{

    public function indexAction()
    {
        include './view/template.php';
    }
    
    public function contactAction()
    {
        include './view/contact.php';
    }

}
