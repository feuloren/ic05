<?php
class UsersController extends AppController {
  public $scaffold;
  public $components = array('Auth' => array('authenticate' => array('Form' => array('fields' => array('username' => 'name')))));
  public $helpers = array('Html', 'Form', 'Session');

  public function login() {
    if ($this->request->is('post')) {
      if ($this->Auth->login($this->request->data)) {
        return $this->redirect($this->Auth->redirect());
      } else {
        $this->Session->setFlash(__('Username or password is incorrect'), 'default', array(), 'auth');
      }
    }
  }

  function logout() {
    $this->redirect($this->Auth->logout());
  }
  /*public $helpers = array('Html', 'Form');

  public function index() {
    $this->set('actors', $this->Actor->find('all'));
  }

  public function view() {
    $this->set('actor', $this->Actor->find());
    }*/
}
?>