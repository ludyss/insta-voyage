<?php

require_once './model/BaseModel.php';

/**
 * Description of PictureModel
 *
 */
class PictureModel extends BaseModel
{

    /**
     * 
     * @param type $id
     * @param array $columns
     * @return type
     */
    public function findByTripStepId($id)
    {
        if (!$this->db instanceof \PDO) {
            $this->init();
        }

        $sql = 'SELECT * FROM ' . $this->table
                . ' WHERE id_trip_step = :id';

        $query = $this->db->prepare($sql);
        $query->execute(array(':id' => $id));
        return $query->fetchAll();
    }

}
