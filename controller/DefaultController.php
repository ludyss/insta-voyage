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
        $view = './view/default/contact.php';
        include './view/template.php';
    }
    public function sejourAction()
    {
        echo 'Séjour';
    }
    public function stayathomeAction()
    {
        echo 'Je reste à la maison.';
    }
    
    public function showAction()
    {
        echo 'voir le programme avec le contrôleur par défaut';
    }
    public function programmeAction()
    {
        $view = './view/default/programme.php';
        include './view/template.php';
    }
}
