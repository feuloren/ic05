<?php

class GraphController extends AppController {
  public $name = 'Graph';
  public $uses = array('Actors', 'Keywords', 'Projects');
  public $helpers = array('Html', 'Form');

  public function index() {
  }

  public function render() {
    // Créé un fichier gdf avec les dernières données
    // On indique le type d'export souhaité en paramètre
  }
}

?>