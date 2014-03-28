<?php

require_once './model/BaseModel.php';

/**
 * Description of TripModel
 *
 */
class ClientModel extends BaseModel {

    /**
     * Check if email exist
     * @param type $email
     */
    public function existemail($email) {
        if (!$this->db instanceof \PDO) {
            $this->init();
        }
        $sql = 'SELECT email FROM client WHERE email = :email';
        $query = $this->db->prepare($sql);
        $query->execute(array(':email' => $email));
        return $query->fetch();
    }

    /**
     * Get client information By emaik
     * @param type $email
     */
    public function getClientByMail($email) {
        if (!$this->db instanceof \PDO) {
            $this->init();
        }
        $sql = 'SELECT * FROM client WHERE email = :email';
        $query = $this->db->prepare($sql);
        $query->execute(array(':email' => $email));
        return $query->fetch();
    }

    /**
     * Generate a random password string
     * 
     * @param type $lenght
     */
    public function generatePassword($length = 8) {
        return substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, $length);
    }

}