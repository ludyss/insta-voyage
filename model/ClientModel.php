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
        
    }
    
    /**
     * Get client information By emaik
     * @param type $email
     */
    public function getClientByMail($email) {
        
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