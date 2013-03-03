<style type="text/css">
  .sidebar-nav {
  		padding: 10px 0;
  }
  
  .row-fluid{
  		margin-top: 30px;
  }
  
  #cluster{
	    float:right;
	    float:top;
  }
  
  
  #menu{
	    z-index:4;
   		position: absolute;
  }
    
   #legend{
  }
  
   #sigma-container{
   		float:right;
   		z-index:8;
   		position: relative;
   }
  
  
  
</style>


<!-- for the graph visualization -->
   <?php $this->Html->css("parisjs", null, array('inline'=>false)); ?>

<!-- Vertical MENU for the Graph -->





<div class="container-fluid">



          
  <div class="row-fluid">


<!-- button -->
    <div id="cluster">
    <a href="/ic05/graph" class="btn
          btn-success"> See the Clusters </a>
    <p> Update the ... </p>
    </div>
    
    
  


<!-- Research bar -->
   <div class="span3">

      <div class="well sidebar-nav" style="opacity:0.7;" id="menu">
        <ul class="nav nav-list">

          <li class="nav-header"><i class="icon-search"></i>RESEARCH - Monopartite graph of</li>

          <li>Project linked by</li>
          <ul class="nav nav-list">
            <li><a href="http://twitter.github.com/bootstrap/examples/fluid.html#">Key words</a></li>
          </ul>

          <li>Actors linked by</li>
          <ul class="nav nav-list">
            <li><a href="http://twitter.github.com/bootstrap/examples/fluid.html#">Key word</a></li>
            <li><a href="http://twitter.github.com/bootstrap/examples/fluid.html#">Project</a></li>
          </ul>

          <li>Key words linked by</li>
          <ul class="nav nav-list">
            <li><a href="http://twitter.github.com/bootstrap/examples/fluid.html#">Project</a></li>
          </ul>

          <li class="nav-header">Tripartite graph of </li>
          <li class="active"><a href="http://twitter.github.com/bootstrap/examples/fluid.html#">Projects, actors and key words</a></li>


        </ul>
      </div><!-- END : Vertical MENU for the Graph -->
    </div>   
    



   
   
   <div id="sigma-container"></div>

  </div><!--/.fluid-container-->



  <?php $this->Html->script("sigma.min", array("block"=>"script")); ?>
  <?php $this->Html->script("sigma.forceatlas2", array("block"=>"script")); ?>
  <?php $this->Html->script("parisjs", array("block"=>"script")); ?>
  <?php $this->Html->scriptBlock("$(function() { init_sigma('".
                              $this->Html->url(array('controller'=>'downloads', 'action'=>'gen', '3p'),
                                               array('absolute'=>true)).
                               "'); })", array("block"=>"script")); ?>


    

 <!-- Legend -->
   <div class="span2" id="legend">

      <div class="well sidebar-nav" style="opacity:1;">
        <ul class="nav nav-list">

          <li class="nav-header">Legend</li>
          
          <ul class="nav nav-list">
          		<li style="color:#2dc63b;">Project</li>
          		<li style="color:#ff0000;">Actor</li>
          		<li style="color:#5f57fd;">Key word</li>
          </ul>
        </ul>
      </div>
    </div>




<!-- Legend -->
   <div class="span3">

      <div class="well sidebar-nav" style="opacity:1;">
        <ul class="nav nav-list">

          <li class="nav-header">Legend</li>
          
          <ul class="nav nav-list">
          <?php foreach($types as $type) { ?>
                   <li style="color:;"><?php echo $type['Type']['title'] ; ?> </li>
          <?php } ?>

          </ul>
        </ul>
      </div>
    </div>
</div>


</div>
</div></div>









