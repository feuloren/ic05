<?php
class Keyword extends AppModel {
  public $hasAndBelongsToMany = array('Actor', 'Project');
}