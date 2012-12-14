<?php

class HomeController extends AppController {
  public $name = 'Home';
  public $uses = array('Images');
  public $helpers = array('Html', 'Form');

  public function index() {
    $this->set('images', $this->Images->find('all')
               );
  }
}

?>