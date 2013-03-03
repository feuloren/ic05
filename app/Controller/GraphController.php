<?php

class GraphController extends AppController {
  public $uses = array('Actors', 'Keywords', 'Projects','Type');
  public $helpers = array('Html', 'Form');

  public function index() {
        $this->set('types', $this->Type->find('all'));
  }
}

?>