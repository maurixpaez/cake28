<!-- CONTROLADOR File: /app/Controller/PostsController.php -->

<?php

class PostsController extends AppController {
    public $helpers = array ('Html','Form');

    public function index() {
        $this->set('posts', $this->Post->find('all'));
    }

    public function view($id = null) {
        $this->set('post', $this->Post->findById($id));
    }
}
?>