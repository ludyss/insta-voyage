<?php

require_once './model/AdminModel.php';

/**
 * Description of AdminController
 *
 */
class AdminController {

    public function indexAction() {
        $view = './view/admin/login.php';
        include './view/admin/template.php';
    }

}
