<?php

require './model/BaseModel.php';

/**
 * Description of TripModel
 *
 */
class TripModel extends BaseModel
{

    public function findAll(array $columns = array(), $offset = null, $limit = null)
    {
        $sql = 'SELECT * FROM `Trip`';
        
        
        
        $query = $this->db->prepare($sql);

        $query->execute(array(':id' => $id));
        return $query->fetch();
    }

    public function findById($id, array $columns = array())
    {
        $sql = 'SELECT * FROM `Trip` WHERE `id_trip` = :id';
        $query = $this->db->prepare($sql);

        $query->execute(array(':id' => $id));
        return $query->fetch();
    }

    public function save(array $trip)
    {
        
    }

    public function deleteById($id, $hard = false)
    {
        
    }

}
