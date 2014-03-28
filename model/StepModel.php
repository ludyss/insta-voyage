<?php

require_once './model/BaseModel.php';

/**
 * Description of StepModel
 *
 */
class StepModel extends BaseModel
{

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

        $sql = 'SELECT * FROM ' . $this->table . ' WHERE id_trip = :id_trip ORDER BY begin_date ASC';

        $query = $this->db->prepare($sql);
        $query->execute(array(':id_trip' => $id));
        $steps = $query->fetchAll();

        $len = count($steps);
        for ($i = 0; $i < $len; $i++) {
            $steps[$i]['begin_date'] = new \DateTime($steps[$i]['begin_date']);
            $steps[$i]['end_date'] = new \DateTime($steps[$i]['end_date']);
        }

        return $steps;
    }

    /**
     * 
     * @param array $columns
     * @param int $offset
     * @param int $limit
     * @return array
     */
    public function findAll(array $columns = array(), $offset = 0, $limit = null)
    {
        $steps = parent::findAll($columns, $offset, $limit);

        $len = count($steps);
        for ($i = 0; $i < $len; $i++) {
            $steps[$i]['begin_date'] = new \DateTime($steps[$i]['begin_date']);
            $steps[$i]['end_date'] = new \DateTime($steps[$i]['end_date']);
        }

        return $steps;
    }

    /**
     * 
     * @param int $id
     * @param array $columns
     * @return array
     */
    public function findById($id, array $columns = array())
    {
        $step = parent::findById($id, $columns);

        $step['begin_date'] = new \DateTime($step['begin_date']);
        $step['end_date'] = new \DateTime($step['end_date']);

        return $step;
    }

    /**
     * 
     * @param int $id
     * @return array
     */
    public function findByIdWithPicture($id)
    {
        if (!$this->db instanceof \PDO) {
            $this->init();
        }

        $sql = 'SELECT ' . $this->table . '.*, picture.filename FROM ' . $this->table
                . ' LEFT JOIN picture on picture.id_picture = ' . $this->table . '.cover'
                . ' WHERE ' . $this->table . '.' . $this->primary_key . ' = :id';

        $query = $this->db->prepare($sql);
        $query->execute(array(':id' => $id));
        $step = $query->fetch();

        $step['begin_date'] = new \DateTime($step['begin_date']);
        $step['end_date'] = new \DateTime($step['end_date']);

        return $step;
    }

    /**
     * 
     * @param int $id
     * @return array
     */
    public function findByTripIdWithPicture($id)
    {
        if (!$this->db instanceof \PDO) {
            $this->init();
        }

        $sql = 'SELECT ' . $this->table . '.*, picture.filename FROM ' . $this->table
                . ' LEFT JOIN picture on picture.id_picture = ' . $this->table . '.cover'
                . ' LEFT JOIN trip on trip.id_trip = ' . $this->table . '.id_trip'
                . ' WHERE ' . $this->table . '.' . $this->primary_key . ' = :id';

        $query = $this->db->prepare($sql);
        $query->execute(array(':id' => $id));
        $steps = $query->fetchAll();

        foreach ($steps as $key => $step) {
            $steps[$key]['begin_date'] = new \DateTime($step['begin_date']);
            $steps[$key]['end_date'] = new \DateTime($step['end_date']);
        }
        
        return $steps;
    }

}
