<?php

/**
 * Description of DefaultController
 *
 * @author fabien
 */
class DefaultController
{

    public function indexAction()
    {
        include './view/template.php';
    }

//    public function helloAction()
//    {
//        die('hello world!');
//    }
//
//    public function nameAction($name)
//    {
//        die('welcome ' . $name);
//    }
//
//    public function getonlyAction()
//    {
//        echo('this route is only reachable by get method  -- try the post only route => <form action="/postonly" method="post"><input type="submit" value="post"></form>');
//        die;
//    }
//
//    public function postonlyAction()
//    {
//        die('this route is only reachable by post method');
//    }

    }
