<!-- Vertical MENU for the Graph -->
<div class="row-fluid">
  <!-- The grey block -->     
  <div class="span12">
    <div class="hero-unit">
      <h3>Top ten of the Projects</h3>
      <p>Want to know the projects with most constributors ? Check
      this out on this page !
      </p>
    </div>
    
    
    <div class="container">
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>Rank</th>
            <th>Name</th>
          </tr>
        </thead>
        <tbody>
        <?php
           $rank = 1;
           $list = explode(';', Configure::read('Settings.Projects10'));
           foreach ($list as $project):
        ?>
          <tr>
            <td><?php echo $rank; ?></td>
            <td><?php echo $project; ?></td>
          </tr>
        <?php $rank += 1;
              endforeach; ?>
        </tbody>
      </table>
      
      
    </div>
  </div>
</div>
