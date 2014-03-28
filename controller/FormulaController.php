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
        $formule = array(
            'formula_type' => $this->inputPost('type'),
            'formula_price' => $this->inputPost('price'),
            'nb_child' => $this->inputPost('nb_child'),
            'nb_adult' => $this->inputPost('nb_adult'),
            'id_trip' => $this->inputPost('id_trip')
        );
        
        $formule_model = new FormulaModel('formula', 'id_formula');
        $id = $formule_model->insert($formule);
        
        $this->redirect('/admin/sejours/' . $formule['id_trip']);
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
            'id_formula' => $this->inputPost('id_formula'),
            'formula_type' => $this->inputPost('type'),
            'formula_price' => $this->inputPost('price'),
            'nb_child' => $this->inputPost('nb_child'),
            'nb_adult' => $this->inputPost('nb_adult'),
            'id_trip' => $this->inputPost('id_trip')
        );

        $trip_model = new FormulaModel('formula', 'id_formula');
        $trip_model->update($formule);

        $this->redirect('/admin/sejours/' . $formule['id_trip']);
    }

    /**
     * 
     */
    public function deleteAction($id)
    {
        $formula_model = new FormulaModel('formula', 'id_formula');
        $formula = $formula_model->findById($id);
        $formula_model->deleteById($id);

        $this->redirect('/admin/sejours/' . $formula['id_trip']);
    }

}
