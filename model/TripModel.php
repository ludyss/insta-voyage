<?php

/**
 * Description of TripModel
 *
 */
class TripModel {

    protected $db;

    public function connection() {
        try {
            $this->db = new PDO("mysql:host=localhost; dbname=insta-voyage", 'root', '');
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $this->db->exec('SET NAMES "UTF8"');
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    public function savelocation($lieu) {
        $sql = 'INSERT into `location`(`id_country`, `location_name`) VALUES (\'\','.$lieu.')';
        return $this->db->exec($sql);
    }
    public function findAll($offset = null, $limit = null) {
        
    }

    public function findById($id) {
        
    }

    public function save(array $trip) {
        
    }

    public function deleteById($id, $hard = false) {
        
    }

}
