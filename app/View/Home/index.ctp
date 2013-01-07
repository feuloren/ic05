<?php
   $this->Html->scriptBlock('$(function(){
$("#myCarousel").carousel();
});',
array('inline'=>false));
$firstImg = true;
?>

<!-- Carousel
     ================================================== -->
<div id="myCarousel" class="carousel slide">
  <div class="carousel-inner">
    <?php foreach ($images as $image): ?>
    <div class="item <?php  if($firstImg) {echo 'active'; $firstImg=false;}?>">
      <img src="<?php echo $this->webroot . 'imagesHome/' . $image['Image']['path']; ?>" alt="">
      <div class="container">
        <div class="carousel-caption">
          <h1><?php echo $image['Image']['name']; ?></h1>
          
          <p class="lead" >
            <small><?php echo $image['Image']['description']; ?></small>
          </p>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
</div><!-- /.carousel -->

<div class="container marketing">
  
  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="span4">
      <div class="well">
        <h2>Vous avez dit Cartographies ?</h2>
        <p>Des outils pour apprendre à lire une carto !</p>
        <p><?php echo $this->Html->link('Learn More »',
          array('controller'=>'home', 'action'=>'learn'), array('class'=>'btn
          btn-success')); ?></p>
      </div>
    </div><!-- /.span4 -->
    <div class="span4"> 
      <div class="well">
        <h2>Voir les Cartos <?php echo Configure::read('Settings.ProjectName'); ?></h2>
        <p>Les visualiser, faire des recherches, des requêtes ...</p>
        <p><?php echo $this->Html->link('Explore »',
          array('controller'=>'graph'), array('class'=>'btn
          btn-success')); ?></p>
      </div>
    </div><!-- /.span4 -->
    <div class="span4">
      <div class="well">
        <h2>On vous a oublié?</h2>
        <p>Contribuer aux Cartographies en remplissant le formulaire !</p>
        <p><?php echo $this->Html->link('Join us Today »',
        array('controller'=>'form'), array('class'=>'btn
        btn-success')); ?></p>
      </div>
    </div><!-- /.span4 -->
  </div><!-- /.row -->
</div>
