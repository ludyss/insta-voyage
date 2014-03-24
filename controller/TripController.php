<?php

require_once './controller/BaseController.php';
require_once './model/TripModel.php';

/**
 * Description of TripController
 *
 */
class TripController extends BaseController
{

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
        $view = './view/trip/create.php';
        include './view/admin/template.php';
    }

    /**
     * 
     */
    public function addAction()
    {

        $trip = array(
            'name' => $this->inputPost('name'),
            'quality' => $this->inputPost('quality'),
            'description' => $this->inputPost('description'),
        );
        
        $trip_model = new TripModel('trip', 'id_trip');
        $trip_model->save($trip);
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

}
