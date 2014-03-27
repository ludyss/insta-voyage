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

    /**
     * 
     * @param type $id
     * @param array $columns
     * @return type
     */
    public function findByTripId($id)
    {
        if (!$this->db instanceof \PDO) {
            $this->init();
        }

        $sql = 'SELECT ' . $this->table . '.* FROM ' . $this->table
                . ' LEFT JOIN trip_step ON ' . $this->table . '.id_trip_step = trip_step.id_trip_step'
                . ' LEFT JOIN trip ON trip_step.id_trip = trip.id_trip'
                . ' WHERE trip.id_trip = :id';

        $query = $this->db->prepare($sql);
        $query->execute(array(':id' => $id));
        return $query->fetchAll();
    }

}
