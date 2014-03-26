<?php

require_once './controller/BaseController.php';
require_once './model/FormulaModel.php';

/**
 * Description of TripController
 *
 */
class FormulaController extends BaseController
{

    /**
     * 
     */
    public function indexAction()
    {
        $formula_model = new FormulaModel('formula', 'id_formula');
        $formules = $formula_model->findAll();

        $view = './view/formula/index.php';
        include './view/admin/template.php';
    }

    /**
     * 
     */
    public function createAction()
    {
        $view = './view/formula/create.php';
        include './view/admin/template.php';
    }

    /**
     * 
     */
    public function addAction()
    {
        $formule = array(
            'formula_type' => $this->inputPost('type'),
            'nb_place_formula' => $this->inputPost('place'),
            'formula_price' => $this->inputPost('price'),
            'id_trip' => $this->inputPost('trip'),
        );
        $formule_model = new FormulaModel('formula', 'id_formula');
        $id = $formule_model->insert($formule);
        //echo ' Yeah ! Tu as soumis le formilaire :D ';
        $this->redirect('/admin/formules');
    }

    /**
     * 
     */
    public function editAction($id)
    {
        $formula_model = new FormulaModel('formula', 'id_formula');
        $formule = $formula_model->findById($id);

        $view = './view/formula/edit.php';
        include './view/admin/template.php';
    }


    /**
     * 
     */
    public function updateAction()
    {
        $formule = array(
            'id_formula' => $this->inputPost('id'),
            'formula_type' => $this->inputPost('type'),
            'nb_place_formula' => $this->inputPost('place'),
            'formula_price' => $this->inputPost('price'),
            'id_trip' => $this->inputPost('trip'),
        );

        $trip_model = new FormulaModel('formula', 'id_formula');
        $trip_model->update($formule);

        $this->redirect('/admin/formules');
    }

    /**
     * 
     */
    public function deleteAction($id)
    {
        $trip_model = new FormulaModel('formula', 'id_formula');
        $trip_model->deleteById($id);

        $this->redirect('/admin/formules');
    }

}
