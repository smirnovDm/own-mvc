<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//namespace models;
use core\Model;

/**
 * Description of ModelNotes
 *
 * @author Admin
 */
class ModelNotes extends Model {

    public function __construct() {
        parent::__construct();
        $this->table = 'notes';
    }

    public function save($name, $text, $date) {
        $query = "INSERT INTO " . $this->table . "(id, author_name, content, created_at) VALUES (NULL, '" . $name . "', '" . $text . "', '" . $date . "');";
        $result = $this->db->prepare($query);
        if (!$result->execute()) {
            return false;
        }
        return true;
    }

    public function getNoteById($id) {
        $query = "SELECT * FROM " . $this->table . " where id = $id;";
        $result = $this->db->query($query);
        if (!$result) {
            return false;
        }
        return $result->fetchAll((PDO::FETCH_ASSOC));
    }

}
