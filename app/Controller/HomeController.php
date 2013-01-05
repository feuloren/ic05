<?php

class HomeController extends AppController {
  public $name = 'Home';
  public $uses = array('Image');
  public $helpers = array('Html', 'Form');

  public function index() {
    $this->set('images', $this->Image->find('all')
               );
  }
}

?>