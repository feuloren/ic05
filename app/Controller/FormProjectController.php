<?php
/**
 * Form Controller
 *
 */
class FormProjectController extends AppController {
  public $uses = array("Actor", "Project", "Keyword");

    public function index() {
        $this->set(array('keywords'=>$this->Keyword->findAllByOfficial(1),
                         'actors'=>$this->Actor->find('all')));
    }
    
    public function save() {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }

        if (!isset($this->request->data['project_keywords']))
            $keywords = array();
        else
            $keywords = $this->request->data['project_keywords'];

        if (!isset($this->request->data['project_actors']))
            $actors = array();
        else
            $actors = $this->request->data['project_actors'];

        $this->Project->set(array(
                             "title"=>$this->request->data['project_name'],
                             "description"=>$this->request->data['project_description'],
                             "Actor"=>$actors,
                             "Keyword"=>$keywords
                                  ));
        $this->Project->save();
    }
     

}
?>


   