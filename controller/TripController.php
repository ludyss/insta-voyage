<?php

include './model/TripModel.php';

/**
 * Description of TripController
 *
 */
class TripController extends TripModel {

    public function savelocation($lieu) {
        $sql = 'INSERT into `location`(`id_country`, `location_name`) VALUES (\'\',' . $lieu . ')';
        return $this->db->exec($sql);
    }

    /**
     * 
     */
    public function indexAction()
    {

    }

    /**
     * 
     */
    public function createAction()
    {
        
    }

    /**
     * 
     */
    public function addAction()
    {
        
    }

    /**
     * 
     */
    public function editAction()
    {
        
    }

    /**
     * 
     */
    public function updateAction()
    {
        
    }

    /**
     * 
     */
    public function deleteAction()
    {
        
    }
    
//    public function showAction($id)
//    {
//        $view = './view/default/programme.php';
//        $nameprogram = $this->findById($id);
//        include './view/template.php';
//    }
    
    
}
