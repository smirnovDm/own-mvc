<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use core\Controller;

/**
 * Description of ControllerIndex
 *
 * @author Admin
 */
class ControllerIndex extends Controller {

    public function __construct() {
        parent::__construct();
        $this->model = new ModelIndex();
    }

    public function actionIndex() {
        
        $this->view->notes = $this->model->getNotes();
        $this->view->render('main_index_view');
    }

}
