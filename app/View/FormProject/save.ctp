<h2>Thank you for your collaboration !</h2>
<h4>Whats next ?</h4>
<p>
   <?php echo $this->Html->link('Add an actor', array('controller'=>'formActor'), array('class'=>'btn btn-primary')); ?>
   <?php echo $this->Html->link('Add a project', array('controller'=>'formProject'), array('class'=>'btn btn-primary')); ?>
<br/><br/>

   <?php echo $this->Html->link('Show me the graph !', array('controller'=>'graph'), array('class'=>'btn btn-success')); ?>
