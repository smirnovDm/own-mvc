<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use core\Controller;

/**
 * Description of ControllerNotes
 *
 * @author Admin
 */
class ControllerNotes extends Controller {
    
    public function __construct() {
        parent::__construct();
        $this->model = new ModelNotes();
    }
    public function actionIndex() {
        
    }

    public function actionAdd() {
        $post_data = filter_input_array(INPUT_POST);
        $name = strip_tags($post_data['name']);
        $content = strip_tags($post_data['content']);
        $created_at = date("Y-m-d H:i:s");
        $this->model->save($name, $content, $created_at);
        $uri = $_SERVER['HTTP_REFERER'];
        header("Location: /");
    }
    
    public function actionShow($id){
        $note_id = (int) $id[0];
        $this->view->note = $this->model->getNoteById($note_id);
        $this->view->render('note_index_view');
    }

}
