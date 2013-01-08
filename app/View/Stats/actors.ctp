<!-- Vertical MENU for the Graph -->
<div class="row-fluid">
  <!-- The grey block -->     
  <div class="span12">
    <div class="hero-unit">
      <h3>Top ten of the Actors</h3>
      <p>Who are the most involved actors ? Check this out on this
      page !
      </p>
    </div>
    
    
    <div class="container">
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>Rnk</th>
            <th>Name</th>
          </tr>
        </thead>
        <tbody>
        <?php
           $rank = 1;
           $list = explode(';', Configure::read('Settings.Actors10'));
           foreach ($list as $actor):
        ?>
          <tr>
            <td><?php echo $rank; ?></td>
            <td><?php echo $actor; ?></td>
          </tr>
        <?php $rank += 1;
              endforeach; ?>
        </tbody>
      </table>
      
      
    </div>
  </div>
</div>
