<!-- Carousel -->
<div id="myCarousel" class="carousel slide">
  <div class="carousel-inner">
    <div class="item active">
    <?php
       $images = $this->Images->;
       foreach ($image as $image) {
          echo '
          <div class="container">
              <h1>'.$image['Image']['Titre'].'</h1>
              
          </div>'
       }
    ?>
      <img src="./Carousel Template · Bootstrap_files/slide-01.jpg" alt="">
      <div class="container">
        <div class="carousel-caption">
          <h1>Example 1.</h1>
          
          <p class="lead" >
            <small>information about the graph.
          </small></p>
          
          <a class="btn btn-primary" href="http://twitter.github.com/bootstrap/examples/carousel.html#">Join us today</a>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="./Carousel Template · Bootstrap_files/slide-02.jpg" alt="">
      <div class="container">
        <div class="carousel-caption">
          <h1>Example 2.</h1>
          <p class="lead">
            <small>information about the graph.
            </small>
          </p>
          <a class="btn btn-primary" href="http://twitter.github.com/bootstrap/examples/carousel.html#">Learn more</a>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="./Carousel Template · Bootstrap_files/slide-03.jpg" alt="">
      <div class="container">
        <div class="carousel-caption">
          <h1>Example 3.</h1>
          <p class="lead">
            <small>information about the graph.
            </small>
          </p>
          <a class="btn btn-primary" href="http://twitter.github.com/bootstrap/examples/carousel.html#">Explore</a>
        </div>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="http://twitter.github.com/bootstrap/examples/carousel.html#myCarousel" data-slide="prev">‹</a>
  <a class="right carousel-control" href="http://twitter.github.com/bootstrap/examples/carousel.html#myCarousel" data-slide="next">›</a>
</div><!-- /.carousel -->

<div class="container marketing">
  
  <!-- Explications sur le site -->
  <div class="row">
    <div class="span4">
      <h2>Vous avez dit Cartographies ?</h2>
      <p>Des outils pour apprendre à lire une carto !</p>
      <p><a class="btn btn-success" href="http://twitter.github.com/bootstrap/examples/carousel.html#">Learn more»</a></p>
    </div><!-- /.span4 -->
    <div class="span4">
      <h2>Voir les Cartos DD de l'UTC</h2>
      <p>Les visualiser, faire des recherches, des requêtes ...</p>
      <p><a class="btn btn-success" href="http://twitter.github.com/bootstrap/examples/carousel.html#">Explore »</a></p>
    </div><!-- /.span4 -->
    <div class="span4">
      <h2>On vous a oublié?</h2>
      <p>Contribuer aux Cartographies en remplissant le formulaire !</p>
      <p><a class="btn btn-success" href="http://twitter.github.com/bootstrap/examples/carousel.html#">Join us today »</a></p>
    </div><!-- /.span4 -->
  </div><!-- /.row -->

</div>



