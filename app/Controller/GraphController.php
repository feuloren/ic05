<?php

class GraphController extends AppController {
  public $uses = array('Actors', 'Keywords', 'Projects');
  public $helpers = array('Html', 'Form');

  public function index() {
  }
}

?>