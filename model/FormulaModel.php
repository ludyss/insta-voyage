<?php

require './model/BaseModel.php';

/**
 * Description of TripModel
 *
 */
class FormulaModel extends BaseModel
{

    public function findAll(array $columns = array(), $offset = null, $limit = null)
    {
        if (!$this->db instanceof \PDO) {
            $this->init();
        }
        $sql = 'SELECT * FROM `formula`';
        
        $query = $this->db->prepare($sql);

        $query->execute();
        return $query->fetchAll();
    }

    public function findById($id, array $columns = array())
    {
        if (!$this->db instanceof \PDO) {
            $this->init();
        }
        $sql = 'SELECT * FROM `formula` WHERE `id_formula` = :id';
        $query = $this->db->prepare($sql);

        $query->execute(array(':id' => $id));
        return $query->fetch();
    }

}
