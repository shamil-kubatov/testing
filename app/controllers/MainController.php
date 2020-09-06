<?php

namespace app\controllers;

class MainController extends AppController {

    public function indexAction(){

        $this->setMeta('Комментарии');
        $comment = \R::findAll('comments', 'ORDER BY date DESC');
        if(isset($_POST['add_comment'])){
            $comment_insert = \R::dispense('comments');
            $this->insertComment($comment_insert);
            header('Location: /');
        }
        $this->set(compact('comment'));
    }

    protected function insertComment($data){

        if(!empty($_POST['name']) & !empty($_POST['comment'])) {
            $data->name = trim($_POST['name']);
            $data->comment = trim($_POST['comment']);
            $save = \R::store($data);
        }
    }

}