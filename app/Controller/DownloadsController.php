<?php
class DownloadsController extends AppController {
  public $uses = array('Actor', 'Keyword', 'Project', 'Rendering');
  
  public function index() {
    
  }

  public function latest() {
    
  }

  public function others() {
    $renderings = $this->Rendering->find('all');
    $this->set(array('renderings' => $renderings));
  }

  public function gen($type='') {
    switch ($type) {
    case '3p':
      $actors = $this->Actor->find('all');
      foreach ($actors as $actor) {
        $nodes[] = array('name'=>'a'.$actor['Actor']['id'],
                         'label'=>$actor['Actor']['name'],
                         'type'=>'actor');
        foreach($actor['Keyword'] as $keyword)
          $edges[] = array('a'.$actor['Actor']['id'], 'k'.$keyword['id']);
        foreach($actor['Project'] as $project)
          $edges[] = array('a'.$actor['Actor']['id'], 'p'.$project['id']);
      }
      $projects = $this->Project->find('all');
      foreach ($projects as $project) {
        $nodes[] = array('name'=>'p'.$project['Project']['id'],
                         'label'=>$project['Project']['title'],
                         'type'=>'project');
        foreach($project['Keyword'] as $keyword)
          $edges[] = array('p'.$project['Project']['id'], 'k'.$keyword['id']);
      }
      $keywords = $this->Keyword->find('all');
      foreach ($keywords as $keyword) {
        $nodes[] = array('name'=>'k'.$keyword['Keyword']['id'],
                         'label'=>$keyword['Keyword']['title'],
                         'type'=>'keyword');
      }
      break;
    case 'abyp':
      $actors = $this->Actor->find('all');
      $edges = array();
      foreach ($actors as $actor) {
        $nodes[] = array('name' => 'a'.$actor['Actor']['id'],
                         'label' => $actor['Actor']['name'],
                         'type' => 'actor');
      }
      $projects = $this->Project->find('all');
      foreach ($projects as $project) {
        foreach($project['Actor'] as $a1)
          foreach($project['Actor'] as $a2) {
            if ($a1['id'] < $a2['id'])
              $edges[] = array('a'.$a1['id'],
                               'a'.$a2['id']);
          }
      }
      break;
    case 'abyk':
      $actors = $this->Actor->find('all');
      $edges = array();
      foreach ($actors as $actor) {
        $nodes[] = array('name' => 'a'.$actor['Actor']['id'],
                         'label' => $actor['Actor']['name'],
                         'type' => 'actor');
      }
      $keywords = $this->Keyword->find('all');
      foreach ($keywords as $keyword) {
        foreach($keyword['Actor'] as $a1)
          foreach($keyword['Actor'] as $a2) {
            if ($a1['id'] < $a2['id'])
              $edges[] = array('a'.$a1['id'],
                               'a'.$a2['id']);
          }
      }
      break;
    case 'pbyk':
      $projects = $this->Project->find('all');
      $edges = array();
      foreach ($projects as $project) {
        $nodes[] = array('name' => 'p'.$project['Project']['id'],
                         'label' => $project['Project']['title'],
                         'type' => 'project');
      }
      $keywords = $this->Keyword->find('all');
      foreach ($keywords as $keyword) {
        foreach($keyword['Project'] as $p1)
          foreach($keyword['Project'] as $p2) {
            if ($p1['id'] < $p2['id'])
              $edges[] = array('p'.$p1['id'],
                               'p'.$p2['id']);
          }
      }
      break;
    case 'kbyp':
      $keywords = $this->Keyword->find('all');
      $edges = array();
      foreach ($keywords as $keyword) {
        $nodes[] = array('name' => 'k'.$keyword['Keyword']['id'],
                         'label' => $keyword['Keyword']['title'],
                         'type' => 'keyword');
      }
      $projects = $this->Project->find('all');
      foreach ($projects as $project) {
        foreach($project['Keyword'] as $k1)
          foreach($project['Keyword'] as $k2) {
            if ($k1['id'] < $k2['id'])
              $edges[] = array('k'.$k1['id'],
                               'k'.$k2['id']);
          }
      }
      break;
    default:
      $this->set(array('type'=>$type));
      return;
    }
    $this->set(array('nodes'=>$nodes, 'edges'=>$edges));
    $this->autoLayout = False;
    $this->response->type('txt');
    $this->response->download("$type.gdf");
    $this->render('gdf');
  }
}
?>