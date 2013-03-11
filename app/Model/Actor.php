<?php
class Actor extends AppModel {
  public $hasAndBelongsToMany = array('Keyword', 'Project');
  public $displayField = 'name';
  public $virtualFields = array('name' => "CONCAT(Actor.firstName, ' ', Actor.lastName)"
                                );
}
?>