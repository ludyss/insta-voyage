<?php

require_once './model/BaseModel.php';

/**
 * Description of TripModel
 *
 */
class FormulaModel extends BaseModel {

    public function findTripFormula($id) {
        if (!$this->db instanceof \PDO) {
            $this->init();
        }
        $sql = 'SELECT * FROM `formula` WHERE id_trip = :id_trip';
        $query = $this->db->prepare($sql);
        $query->execute(array(':id_trip' => $id));
        return $query->fetchAll();
    }

}
