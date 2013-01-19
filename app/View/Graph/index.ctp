
<style type="text/css">
  body {
  padding-top: 60px;
  padding-bottom: 40px;
  background-color: black;
  }
  .sidebar-nav {
  padding: 9px 0;
  }
</style>

<!-- for the graph visualization -->
<?php $this->Html->css("neo_sigma"); ?>

<!-- Vertical MENU for the Graph -->
<div class="container-fluid">
  <div class="row-fluid">

    <div class="span3">

      <div class="well sidebar-nav" style="opacity:0.7">
        <ul class="nav nav-list">

          <li class="nav-header">Monopartite graph of</li>

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

  </div><!--/.fluid-container-->

  <!--<div class="span12 sigma-parent" id="sigma-example-parent">-->
  <div class="sigma-expand" id="sigma-example"></div>
  <!--</div>-->


  <?php $this->Html->css("sigma.min"); ?>
  <?php $this->Html->css("sigma.parseGexf"); ?>
  <?php $this->Html->css("neo_sigma"); ?>
