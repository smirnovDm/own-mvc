<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace core;
use PDO;
/**
 * Description of Model
 *
 * @author Admin
 */
class Model {

    /**
     *
     * @var mysqli
     */
    protected $db;

    /**
     *
     * @var string
     */
    protected $table;

    public function __construct() {
        $this->db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PWD, DB_OPTION);
    }

}
