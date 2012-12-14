<?php
class Actor extends AppModel {
  public $hasAndBelongsToMany = array('Keyword', 'Project');
}
?>