<?php
/**
 * Form Controller
 *
 */
class FormController extends AppController {

    public function index() {
    }
    
    public function save() {
        if ($this->request->is('post')) {
            $this->Post->create();
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash('Your information has been saved.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to add your information.');
            }
        }
    }

}
?>
