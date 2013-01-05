<?php
App::import('Component', 'Auth');
 
class AppAuthComponent extends AuthComponent
{
  public $authenticate = array('Form' => array('fields' => array('username' => 'name')));
  public $loginAction = array('admin'=>false, 'controller'=>'admin', 'action'=>'login');
  public $loginRedirect = array('controller'=>'admin', 'action'=>'index');
 
  /**
   * Démarrage du composant.
   * Autorisation si pas de préfixe dans la Route qui a conduit ici.
   *
   * @param object $controller Le contrôleur qui a appelé le composant.
   */
  function startup(Controller $controller)
  {
    $prefix = null;
 
    if(empty($controller->params['prefix']))
      {
        $this->allow();
      }
 
    parent::startup($controller);
  }
}
?>