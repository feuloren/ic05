<div class="well well-large">
  <h2>The admin interface</h2>
  <blockquote>
  <p>To manage the web site ...</p>
</blockquote>
</div>

<div class="container">

    
    <h4>
    
    
   <div align="center"><?php echo $this->Html->link('Project Settings', array('admin'=>true, 'controller'=>'settings')); ?></br></br>
    
   <?php echo $this->Html->link('Images for home page', array('admin'=>'true', 'controller'=>'images')); ?></br></br>
    
    <!-- 
    <?php echo $this->Html->link('Available renderings', array('admin'=>'true', 'controller'=>'renderings')); ?></br></br> -->
    
    <?php echo $this->Html->link('Manage Administrators', array('admin'=>'true', 'controller'=>'users')); ?></br></br>
    
    <?php echo $this->Html->link('Actors', array('admin'=>'true', 'controller'=>'actors')); ?></br></br>
    
    <?php echo $this->Html->link('Projects', array('admin'=>'true', 'controller'=>'projects')); ?></br></br>
    
    <?php echo $this->Html->link('Keywords', array('admin'=>'true', 'controller'=>'keywords')); ?></br></br>
    
    <?php echo $this->Html->link('Types', array('admin'=>'true', 'controller'=>'types')); ?></br></br>

    
    </h4>


</div>
