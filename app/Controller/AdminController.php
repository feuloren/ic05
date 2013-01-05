<?php
class AdminController extends AppController {
  public $helpers = array('Html', 'Form', 'Session');

  public function login() {
    if ($this->request->is('post')) {
      if ($this->AppAuth->login($this->request->data)) {
        return $this->redirect($this->AppAuth->redirect());
      } else {
        $this->Session->setFlash(__('Username or password is incorrect'), 'default', array(), 'auth');
      }
    }
  }

  function logout() {
    $this->redirect($this->Auth->logout());
  }

  function index() {

  }

}
?>