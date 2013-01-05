<!DOCTYPE html>
<html lang="fr">
<head>
	<?php echo $this->Html->charset('utf-8'); ?>
	<title>
		<?php  ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

    echo $this->Html->css(array('bootstrap.min', 'own'));

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
            <?php echo $this->Html->link('Project Name', '/'); ?>
          </li>
          <li>
            <?php echo $this->Html->link('About', array('controller'
            => 'project',
            'action' => 'about')); ?>
          </li>
          <li>
            <?php echo $this->Html->link('Graph', array('controller'
            => 'graph')); ?>
          </li>
          <li>
            <?php echo $this->Html->link('Form', array('controller' =>
            'add')); ?>
          </li>
        </ul>
        <ul class="nav">
          <li class="dropdown">
            <a href="#" data-toggle="dropdown">
              Services
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <li><?php echo $this->Html->link('Latest Graph',
                array('controller' => 'downloads', 'action' => 'latest')); ?></li>
              <li><?php echo $this->Html->link('Other Downloads',
                array('controller' => 'downloads', 'action' => 'others')); ?></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-search pull-left">
          <input type="text" class="search-query" placeholder="Search">
        </form>
        <ul class="nav pull-right">
          <li class="dropdown">
            <a href="http://www.w3resource.com/twitter-bootstrap/navbar-example.html#" class="dropdown-toggle" data-toggle="dropdown">
              Social
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>

<div class="container-fluid" id="main">
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
</div>

      <?php echo $this->Html->script('//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js');
      echo $this->Html->script('bootstrap.min');
	  echo $this->fetch('script'); ?>

</body>
</html>
