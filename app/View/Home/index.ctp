<?php if (Configure::read('Settings.DisplayImages')): ?>

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
          <h3><?php echo $image['Image']['name']; ?></h3>
          
          <p class="lead" >
            <h5><small><?php echo $image['Image']['description']; ?></h5></small>
          </p>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
</div><!-- /.carousel -->

<?php endif; ?>




<?php if (Configure::read('Settings.Display3Blocks')): ?>

<div class="container marketing">
  
  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="span4" style="text-align: center;">
        <h3>How about graph?</h3>
        <p>Some tools to understand them!</p>
        <p><?php echo $this->Html->link('Learn More »',
          array('controller'=>'home', 'action'=>'learn'), array('class'=>'btn
          ')); ?></p>
    </div><!-- /.span4 -->
    <div class="span4"  style="text-align: center;"> 
        <h3>See the graphs <?php echo Configure::read('Settings.ProjectName'); ?></h3>
        <p>Visualize, search ...</p>
        <p><?php echo $this->Html->link('Explore »',
          array('controller'=>'graph'), array('class'=>'btn
          ')); ?></p>
    </div><!-- /.span4 -->
    <div class="span4"  style="text-align: center;">
        <h3>You had been forgotten?</h3>
        <p>Contribute by filling up the form!</p>
        <p><?php echo $this->Html->link('Join us Today »',
        array('controller'=>'form'), array('class'=>'btn
        ')); ?></p>
    </div><!-- /.span4 -->
  </div><!-- /.row -->
</div>

<?php endif; ?>


<!-- The InfoHome elements -->


<?php echo Configure::read('Settings.InfoHome'); ?>


