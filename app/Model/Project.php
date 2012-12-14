<?php
class Project extends AppModel {
  public $hasAndBelongsToMany = array('Keyword', 'Actor');
 }
?>