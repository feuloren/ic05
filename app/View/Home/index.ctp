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
        <p><a class="btn btn-success" href="http://twitter.github.com/bootstrap/examples/carousel.html#">Learn more»</a></p>
      </div>
    </div><!-- /.span4 -->
    <div class="span4"> 
      <div class="well">
        <h2>Voir les Cartos DD de l'UTC</h2>
        <p>Les visualiser, faire des recherches, des requêtes ...</p>
        <p><a class="btn btn-success" href="http://twitter.github.com/bootstrap/examples/carousel.html#">Explore »</a></p>
      </div>
    </div><!-- /.span4 -->
    <div class="span4">
      <div class="well">
        <h2>On vous a oublié?</h2>
        <p>Contribuer aux Cartographies en remplissant le formulaire !</p>
        <p><a class="btn btn-success" href="http://twitter.github.com/bootstrap/examples/carousel.html#">Join us today »</a></p>
      </div>
    </div><!-- /.span4 -->
  </div><!-- /.row -->
</div>

<hr>

<footer>
  <p class="pull-right"><a href="#">Back to top</a></p>
  <p>© 2012 - J. Antonetti & F. Thévenet
  </p>
</footer>
