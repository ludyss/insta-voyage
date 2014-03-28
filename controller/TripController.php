<?php

require_once './controller/BaseController.php';
require_once './model/TripModel.php';
require_once './model/StepModel.php';
require_once './model/PictureModel.php';
require_once './model/ClientModel.php';
require_once './model/ReservationModel.php';
require_once './model/FormulaModel.php';

/**
 * Description of TripController
 *
 */
class TripController extends BaseController {

    /**
     * 
     */
    public function indexAction() {
        $trip_model = new TripModel('trip', 'id_trip');
        $trips = $trip_model->findAllWithPicture();

        $view = './view/trip/index.php';
        include './view/admin/template.php';
    }

    /**
     * 
     */
    public function createAction() {
        $view = './view/trip/create.php';
        include './view/admin/template.php';
    }

    /**
     * 
     */
    public function addAction() {
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
    public function showAction($id) {
        $trip_model = new TripModel('trip', 'id_trip');
        $trip = $trip_model->findByIdWithPicture($id);
        $step_model = new StepModel('trip_step', 'id_trip_step');
        $steps = $step_model->findByTripId($id);
        $formula_model = new FormulaModel('formula', 'id_formula');
        $formules = $formula_model->findByTripId($id);

        $view = './view/trip/show.php';
        include './view/admin/template.php';
    }

    /**
     * 
     */
    public function editAction($id) {
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
    public function updateAction() {
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
    public function deleteAction($id) {
        $trip_model = new TripModel('trip', 'id_trip');
        $trip_model->deleteById($id);

        $this->redirect('/admin/sejours');
    }

    public function reserveAction($id) {
        $trip_model = new TripModel('trip', 'id_trip');
        $formule_model = new FormulaModel('formula', 'id_formula');
        $trip = $trip_model->findByIdWithPicture($id);
        $formulas_list = $formule_model->findTripFormula($id);
        //echo " sejour $id";
        $view = './view/default/reserve.php';
        include './view/template.php';
    }

    public function setreservationAction($id) {
        $now = new \DateTime();
        $client_model = new ClientModel('client', 'id_client');
        $reservation_model = new ReservationModel('reservation', 'id_reservation');
        if ($client_model->existemail($this->inputPost('email'))) {
            $cleint_data = $client_model->getClientByMail($this->inputPost('email'));
            $client_id = $cleint_data['id_client'];
        } else {
            $salt = $this->inputPost('ville') . $this->inputPost('code_postal');
            $client_pass_word = $client_model->generatePassword();
            $hasPassword = sha1($client_pass_word . $salt);
            $client_data = array(
                'firstname' => $this->inputPost('prenom'),
                'lastname' => $this->inputPost('nom'),
                'email' => $this->inputPost('email'),
                'telephone' => $this->inputPost('telephone'),
                'country' => $this->inputPost('ville'),
                'city' => $this->inputPost('pays'),
                'address' => $this->inputPost('num_rue') . ' ' . $this->inputPost('nom_rue'),
                'zipcode' => $this->inputPost('code_postal'),
                'password' => $hasPassword,
                'salt' => $salt,
            );
            $client_id = $client_model->insert($client_data);
        }
        $reservation_date = array(
            'id_client' => $client_id,
            'id_formula' => 1,//$this->inputPost('typeFormule'),
            'paiement_date' => $now->format('Y-m-d H:i:s'),
        );
        $reservation_model->insert($reservation_date);
    }

    public function checkEmailAction($email) {
        $client_model = new ClientModel('client', 'id_client');
        if ($client_model->existemail($email)) {
            echo json_encode($client_model->getClientByMail($email));
        } else {
            $return_val = array(
                'email' => $email,
                'state' => 'do not exist',
            );
            echo json_encode($return_val);
        }
    }

}
