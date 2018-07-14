<?php
class PlayersController extends AppController {
    public $helpers = array ('Html','Form');

    function index() {
        $this->set('jugadores', $this->Player->find('all'));
    }
}
?>