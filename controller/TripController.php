<?php

require_once './controller/BaseController.php';
require_once './model/TripModel.php';
require_once './model/StepModel.php';
require_once './model/PictureModel.php';

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
        $trip_model = new TripModel('trip', 'id_trip');
        $trips = $trip_model->findAllWithPicture();

        $view = './view/trip/index.php';
        include './view/admin/template.php';
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
        $id = $trip_model->insert($trip);

        $this->redirect('/admin/sejours/' . $id);
    }

    /**
     * 
     */
    public function showAction($id)
    {
        $trip_model = new TripModel('trip', 'id_trip');
        $trip = $trip_model->findByIdWithPicture($id);
        $step_model = new StepModel('trip_step', 'id_trip_step');
        $steps = $step_model->findByTripId($id);

        $view = './view/trip/show.php';
        include './view/admin/template.php';
    }

    /**
     * 
     */
    public function editAction($id)
    {
        $trip_model = new TripModel('trip', 'id_trip');
        $trip = $trip_model->findById($id);
        $picture_model = new PictureModel('picture', 'id_picture');
        $pictures = $picture_model->findByTripId($id);

        $view = './view/trip/edit.php';
        include './view/admin/template.php';
    }

    /**
     * 
     */
    public function updateAction()
    {
        $trip = array(
            'id_trip' => $this->inputPost('id_trip'),
            'name' => $this->inputPost('name'),
            'quality' => $this->inputPost('quality'),
            'description' => $this->inputPost('description'),
            'cover' => $this->inputPost('cover')
        );

        $trip_model = new TripModel('trip', 'id_trip');
        $trip_model->update($trip);

        $this->redirect('/admin/sejours/' . $trip['id_trip']);
    }

    /**
     * 
     */
    public function deleteAction($id)
    {
        $trip_model = new TripModel('trip', 'id_trip');
        $trip_model->deleteById($id);

        $this->redirect('/admin/sejours');
    }

    public function reserveAction($id) {
        $trip_model = new TripModel('trip', 'id_trip');
        $trip = $trip_model->findByIdWithPicture($id);
        $step_model = new StepModel('trip_step', 'id_trip_step');
        $steps = $step_model->findByTripIdWithPicture($id);
        //echo " sejour $id";
        $view = './view/default/reserve.php';
        include './view/template.php';
    }
}
