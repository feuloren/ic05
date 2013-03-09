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
	
	
	<!-- CSS -->
    <style type="text/css">

      /* Sticky footer styles
      -------------------------------------------------- */

      html,
      body {
        height: 100%;
        background-color: #f5f5f5;
        margin-top: 8px;
        
        /* The html and body elements cannot have any padding or margin. */
      }

      
      /* Wrapper for page content to push down footer */
      #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -60px;
        
      }

      /* Set the fixed height of the footer here */
      #push,
      #footer {
        height: 60px;
      }
      
      #footer {
        background-color: #f5f5f5;
      }

      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 767px) {
        #footer {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px;
        }
      }



      .marketing {
  color: #5a5a5a;
}
	.marketing h1 {
  text-align: center;
  margin: 60px 0 10px;
  font-size: 60px;
  font-weight: 200;
  line-height: 1;
  letter-spacing: -1px;
  }

.marketing h2 {
  font-weight: 200;
  margin-bottom: 5px;
}

.marketing h3 {
  font-weight: 200;
  margin-bottom: 5px;
}


.marketing h4 {
  font-weight: 200;
  margin-bottom: 5px;
}

.marketing h5 {
  font-weight: 200;
  margin-bottom: 5px;
}

.marketing h6 {
  font-weight: 200;
  margin-bottom: 5px;
}

.marketing p {
  font-size: 16px;
  line-height: 1.5;
}



      /* Custom page CSS
      -------------------------------------------------- */
      /* Not required for template or sticky footer method. */

      .container {
        width: auto;
        max-width: 1020px;
      }
      .container .credit {
        margin: 20px 0;
      }

    </style>
	
	
	
</head>
<body>




<div id="wrap">


<div class="container marketing">

  <div class="navbar navbar-fixed-top navbar-inverse">
    <div class="navbar-inner">
      <div class="container"> 
      
      <h5>
          <ul class="nav">
          <li>
           <div class="pull-right" id='title'>
          <?php echo $this->Html->image("icon_graph.ico", array(
	          	"alt" => "graph",
	          	'url' => array('controller' => 'graph')
	      )); ?>
           </div>
          </li> 
        
          <li class="active" style="font-size: 20px;font-weight: 350; color: #5a5a5a;">
           <?php echo $this->Html->link(Configure::read('Settings.ProjectName'), '/'); ?>
          </li>
          
             
          <li>
            <?php echo $this->Html->link('About', array('admin'=>false, 'controller'
            => 'home',
            'action' => 'about')); ?>
          </li>
          
          
          <li>
          <?php echo $this->Html->link('Graph', array('admin'=>false, 'controller'
            => 'graph')); ?> 
          </li>
          

   
          <ul class="nav">
            <li class="dropdown">
              <a href="#" data-toggle="dropdown">
             </i> 
              Form
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
</h5>


<div class="container-fluid" id="main">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>



</div></div>


<div id="push"></div>



      <div id="footer">




      <div class="container">
      	  <p class="muted credit">
      	  
      	        <hr>
              <p class="pull-right">
              <?php echo
              $this->Html->link('Administration du site', '/admin'); ?>
              </p>
           </p>
              <p class="muted credit">
              ©<?php echo Configure::read('Settings.Date'); ?> - 
              <?php echo Configure::read('Settings.Actors'); ?>
              </p>
      </div>
      </div>


      <?php echo $this->Html->script('//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js');
      echo $this->Html->script('bootstrap.min');
	  echo $this->fetch('script'); ?>

</body>
</html>
