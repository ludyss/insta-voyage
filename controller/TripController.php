<?php

include './model/TripModel.php';

/**
 * Description of TripController
 *
 */
class TripController {

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
        $sql = 'INSERT into `location`(`id_country`, `location_name`) VALUES (\'\',' . $lieu . ')';
        return $this->db->exec($sql);
    }

    /**
     * 
     */
    public function index() {
        
    }

    /**
     * 
     */
    public function create() {
        
    }

    /**
     * 
     */
    public function addAction() {
        include './view/addtrip.php';
    }

    /**
     * 
     */
    public function reponseAction() {
        echo 'test';
        $this->connection();
        if ($this->savelocation($_POST['lieu'])) {
            echo 'Super !';
        } else {
            echo 'Snif :\'(';
        }
    }

    /**
     * 
     */
    public function update() {
        
    }

    /**
     * 
     */
    public function delete() {
        
    }

}
