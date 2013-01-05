<h1>Interface administrateur Collab-graph</h1>
<p>Choisissez la catégorie à administrer
  <ul>
    <li><?php echo $this->Html->link('Project Settings', array('admin'=>true, 'controller'=>'settings')); ?></li>
    <li><?php echo $this->Html->link('Images for home page', array('admin'=>'true', 'controller'=>'images')); ?></li>
    <li><?php echo $this->Html->link('Available renderings', array('admin'=>'true', 'controller'=>'renderings')); ?></li>
    <li><?php echo $this->Html->link('Manage Administrators', array('admin'=>'true', 'controller'=>'admins')); ?></li>
    <li><?php echo $this->Html->link('Actors', array('admin'=>'true', 'controller'=>'actors')); ?></li>
    <li><?php echo $this->Html->link('Projects', array('admin'=>'true', 'controller'=>'projects')); ?></li>
    <li><?php echo $this->Html->link('Keywords', array('admin'=>'true', 'controller'=>'keywords')); ?></li>
  </ul>
</p>
