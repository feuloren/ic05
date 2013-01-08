<?php
/**
 * Form Controller
 *
 */
class FormProjectController extends AppController {
    public $uses = array("Actor");

    public function index() {
    }
    
    
    public function save() {
        // ou var $last_name= $th...
        var_dump($this->request->data);
        $actor = array("Actor"=>array(
        "firstName"=>$this->request->data['first_name'],
        "lastName"=> $this->request->data['last_name'],
        "email"=>$this->request->data['email'],
        "type"=>$this->request->data['actor_type'],
                       "description"=>$this->request->data['actor_description']));
        //$project_name=$this->request->data['project_name'];
        $this->Actor->save($actor);
      
                
        // insertion de l'acteur à la table Actor
        /*$query = "INSERT INTO actors (firstName, lastName, email, description, type) VALUES ($first_name, $last_name,$email,$actor_description,$actor_type)";
        $res = mysql_query($query);*/
        
        
        // insertion de l'acteur à chaque project auquel il participe
        $error = 0;
        
        
        /*
        if(!empty($project_name)){
            foreach($project_name as $key_word){
                // insertion de chaque mot clef un par un
                $query2 = "INSERT INTO project() VALUES()";  // !!!!!!!! A COMPLETER !!!!!!!!
                $res2 = mysql_query($query);
                if (!res2){
                    $error = 1;
                }
            }
    
         
        // TO DISPLAY A MESSAGE FOR THE USER AFTER THE INSERTION
        if (res && !error){
            echo(<p>Thank you for your collaboration </p>
                 // !!!!!!!! A COMPLETER !!!!!!!!
                 <p>To add more actors or projects <a href="form.html">click here</a>.</p>);
        }else{
            echo (<p>Error : Unable to add your information, Please try again ! </p>);
        }
        */
    }
     

}
?>


   