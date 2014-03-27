<?php

require_once './controller/BaseController.php';
require_once './model/StepModel.php';
require_once './model/PictureModel.php';

/**
 * Description of StepController
 *
 */
class StepController extends BaseController
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
        
    }

    /**
     * 
     */
    public function addAction()
    {
        $step = array(
            'id_trip' => $this->inputPost('id_trip'),
            'city' => $this->inputPost('city'),
            'hotel_name' => $this->inputPost('hotel_name'),
            'hotel_quality' => $this->inputPost('hotel_quality'),
            'begin_date' => $this->stringToSQL($this->inputPost('begin_date')),
            'end_date' => $this->stringToSQL($this->inputPost('end_date')),
            'description' => $this->inputPost('description'),
        );

        $step_model = new StepModel('trip_step', 'id_trip_step');
        $id = $step_model->insert($step);

        $this->redirect('/admin/sejours/' . $step['id_trip']);
    }

    /**
     * 
     */
    public function showAction($id)
    {
        $step_model = new StepModel('trip_step', 'id_trip_step');
        $step = $step_model->findByIdWithPicture($id);
        
        $picture_model = new PictureModel('picture', 'id_picture');
        $pictures = $picture_model->findByTripStepId($id);

        $view = './view/step/show.php';
        include './view/admin/template.php';
    }

    /**
     * 
     */
    public function editAction($id)
    {
        $step_model = new StepModel('trip_step', 'id_trip_step');
        $step = $step_model->findById($id);
        $picture_model = new PictureModel('picture', 'id_picture');
        $pictures = $picture_model->findByTripStepId($id);

        $view = './view/step/edit.php';
        include './view/admin/template.php';
    }

    /**
     * 
     */
    public function updateAction()
    {
        $step = array(
            'id_trip_step' => $this->inputPost('id_trip_step'),
            'id_trip' => $this->inputPost('id_trip'),
            'city' => $this->inputPost('city'),
            'hotel_name' => $this->inputPost('hotel_name'),
            'hotel_quality' => $this->inputPost('hotel_quality'),
            'begin_date' => $this->stringToSQL($this->inputPost('begin_date')),
            'end_date' => $this->stringToSQL($this->inputPost('end_date')),
            'description' => $this->inputPost('description'),
            'cover' => $this->inputPost('cover'),
        );

        $step_model = new StepModel('trip_step', 'id_trip_step');
        $step_model->update($step);

        $this->redirect('/admin/etapes/' . $step['id_trip_step']);
    }

    /**
     * 
     */
    public function deleteAction($id)
    {
        $step_model = new StepModel('trip_step', 'id_trip_step');
        $step = $step_model->findById($id);
        $step_model->deleteById($id);

        $this->redirect('/admin/sejours/' . $step['id_trip']);
    }

}
