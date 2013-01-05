<?php

class HomeController extends AppController {
  public $name = 'Home';
  public $uses = array('Image');
  public $helpers = array('Html', 'Form');

  public function index() {
    $this->set(array('images'=>$this->Image->find('all'),
                     'title_for_layout'=>Configure::read('Settings.ProjectName') . ' - Home'));
  }

  public function about() {
    $this->set('title_for_layout', 'À propos');
  }

  public function learn() {
    $this->set('title_for_layout', 'Learn more about graphs');
  }
}

?>