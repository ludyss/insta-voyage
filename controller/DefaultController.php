<?php

require_once './model/TripModel.php';
require_once './model/StepModel.php';

/**
 * Description of DefaultController
 *
 */
class DefaultController {

    public function indexAction()
    {
        $trip_model = new TripModel('trip', 'id_trip');
        $trips = $trip_model->findAllWithPicture();
        
        $view = './view/default/home.php';
        include './view/template.php';
    }
    
    public function programAction($id)
    {
        $trip_model = new TripModel('trip', 'id_trip');
        $trip = $trip_model->findByIdWithPicture($id);
        $step_model = new StepModel('trip_step', 'id_trip_step');
        $steps = $step_model->findByTripIdWithPicture($id);
        
        $view = './view/default/program.php';
        include './view/template.php';
    }

    public function contactAction() {
        include './view/default/contact.php';
        //include './view/template.php';
    }
}
