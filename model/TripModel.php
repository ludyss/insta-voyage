<?php

require_once './model/BaseModel.php';

/**
 * Description of TripModel
 *
 */
class TripModel extends BaseModel {

    /**
     * 
     * @param int $id
     * @return array
     */
    public function findAllWithPicture() {
        if (!$this->db instanceof \PDO) {
            $this->init();
        }

        $sql = 'SELECT * FROM ' . $this->table
                . ' LEFT JOIN picture on picture.id_picture = ' . $this->table . '.cover';

        $query = $this->db->prepare($sql);
        $query->execute();
        $trips = $query->fetchAll();

        return $trips;
    }

    /**
     * 
     * @param int $id
     * @return array
     */
    public function findByIdWithPicture($id) {
        if (!$this->db instanceof \PDO) {
            $this->init();
        }

        $sql = 'SELECT * FROM ' . $this->table
                . ' LEFT JOIN picture on picture.id_picture = ' . $this->table . '.cover'
                . ' WHERE ' . $this->table . '.' . $this->primary_key . ' = :id';

        $query = $this->db->prepare($sql);
        $query->execute(array(':id' => $id));
        $trip = $query->fetch();

        return $trip;
    }

}
