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
    public function sejourAction()
    {
        echo 'Séjour';
    }
    public function stayathomeAction()
    {
        echo 'Je reste à la maison.';
    }

}
