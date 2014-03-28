<?php

require_once './model/BaseModel.php';

/**
 * Description of FormulaModel
 *
 */
class FormulaModel extends BaseModel {

    /**
     * 
     * @param int $id
     * @return array
     */
    public function findByTripId($id)
    {
        if (!$this->db instanceof \PDO) {
            $this->init();
        }

        $sql = 'SELECT * FROM ' . $this->table . ' WHERE id_trip = :id_trip';

        $query = $this->db->prepare($sql);
        $query->execute(array(':id_trip' => $id));
        $formulas = $query->fetchAll();

        return $formulas;
    }

}
