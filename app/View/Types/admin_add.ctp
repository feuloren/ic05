<?php $this->Html->css("farbtastic", null, array('inline'=>false)); ?>
<?php $this->Html->script("jquery", array("block"=>"script")); ?>
<?php $this->Html->script("farbtastic", array("block"=>"script")); ?>

<?php $this->Html->scriptBlock("
  $(function() {
    $('#demo').hide();
    $('#picker').farbtastic('#color');
  });
    								 "
                               , array("block"=>"script")); 
  ?>

<div class="Types form">
<?php echo $this->Form->create('Type'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Type'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('Actor');
	?>
	
	
	
	 <!-- HTML color picker --> 
<form action="" style="width: 400px;">
  <div class="form-item">
  	<label for="color">Color</label>
  	<input type="text" id="color" name="color" value="#123456" />
  </div>
  
  <div id="picker"></div>
</form>
 <!-- END - HTML color picker -->
	
	
	
	
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Actors'), array('controller' => 'actors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actor'), array('controller' => 'actors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('New Keyword'), array('controller' => 'keywords', 'action' => 'add')); ?> </li>
	</ul>
</div>


