<?php
/**
 * Form Controller
 *
 */
class FormActorController extends AppController {
  public $uses = array("Actor", "Project");

    public function index() {
      $this->set('projects', $this->Project->find('all'));
    }
    
    public function save() {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        var_dump($this->request->data);
        $this->Actor->set(array(
                      "firstName"=>$this->request->data['first_name'],
                      "lastName"=> $this->request->data['last_name'],
                      "email"=>$this->request->data['email'],
                      "type"=>$this->request->data['actor_type'],
                      "description"=>$this->request->data['actor_description'],
                      "Project"=>$this->request->data['actor_project'])
                          );
        $this->Actor->save();
    }
         

}
?>


   