<?php

/**
 * Description of ModelIndex
 *
 * @author Admin
 */
use core\Model;

class ModelIndex extends Model {

    public function __construct() {
        parent::__construct();
        $this->table = 'notes';
    }

    public function getNotes() {
        
            $query = "SELECT * FROM $this->table order by created_at DESC;";
            $result = $this->db->query($query);
            if (!$result) {
                return false;
            }
            return $result->fetchAll((PDO::FETCH_ASSOC));        
    }

}
