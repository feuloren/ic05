<!DOCTYPE html>
<html lang="fr">
<head>
	<?php echo $this->Html->charset('utf-8'); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('bootstrap.min', 'own'));
		
		echo $this->Html->css('mfglabs_iconset.min');


		echo $this->fetch('meta');
		echo $this->fetch('css');
	?>
</head>
<body>
  <div class="navbar navbar-fixed-top navbar-inverse">
    <div class="navbar-inner">
      <div class="container-fluid">
        <ul class="nav">
          <li class="active">
          <a>
          <i class="icon-home icon-white"></i> <?php echo $this->Html->link(Configure::read('Settings.ProjectName'), '/'); ?>
          </a>
          </li>
          <li>
            <?php echo $this->Html->link('About', array('admin'=>false, 'controller'
            => 'home',
            'action' => 'about')); ?>
          </li>
          
          
          <li>
           <?php echo $this->Html->image('icon-graph.ico'); ?>
          <?php echo $this->Html->link('Graph', array('admin'=>false, 'controller'
            => 'graph')); ?>
          </li>

   
          <ul class="nav">
            <li class="dropdown">
              <a href="#" data-toggle="dropdown">
              <i class="icon-pencil"></i> Form
                <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('New Actor',
                  array('admin'=>false, 'controller' => 'formActor')); ?></li>
                <li><?php echo $this->Html->link('New Project',
                  array('admin'=>false, 'controller' => 'formProject')); ?></li>
              </ul>
            </li>
          </ul>
          
          
          
          
          
          <ul class="nav">
            <li class="dropdown">
              <a href="#" data-toggle="dropdown">
                <i class="icon-trophy gradient icon3x" aria-hidden="true"></i>

                Downloads
                <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
              <li><?php echo $this->Html->link('Latest Graph',
                array('admin'=>false, 'controller' => 'downloads', 'action' => 'latest')); ?></li>
              <li><?php echo $this->Html->link('Other Downloads',
                array('admin'=>false, 'controller' => 'downloads', 'action' => 'others')); ?></li>
              </ul>
            </li>
          </ul>
        
        
        <?php if (Configure::read('Settings.DisplayStats')): ?>
        <ul class="nav">
          <li class="dropdown">
            <a href="#" data-toggle="dropdown">
              <i class="icon-star-empty"></i> Stats
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <li><?php echo $this->Html->link('Actors Top 10',
                array('admin'=>false, 'controller' => 'stats', 'action' => 'actors')); ?></li>
              <li><?php echo $this->Html->link('Projects Top 10',
                array('admin'=>false, 'controller' => 'stats', 'action' => 'projects')); ?></li>
              <li><?php echo $this->Html->link('General',
                array('admin'=>false, 'controller' => 'stats', 'action' => 'index')); ?></li>
            </ul>
          </li>
        </ul>
        <?php endif; ?>

          </li>
        </ul>
      </div>
    </div>
  </div>

<div class="container-fluid" id="main">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>

            <hr>

            <footer>
              <p class="pull-right"><?php echo
              $this->Html->link('Administration du site', '/admin'); ?></p>
              <p>
              ©<?php echo Configure::read('Settings.Date'); ?> - 
              <?php echo Configure::read('Settings.Actors'); ?>
              </p>
            </footer>

</div>

      <?php echo $this->Html->script('//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js');
      echo $this->Html->script('bootstrap.min');
	  echo $this->fetch('script'); ?>

</body>
</html>
