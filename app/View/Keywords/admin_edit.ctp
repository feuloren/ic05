<div class="keywords form">
<?php echo $this->Form->create('Keyword'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Keyword'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('official');
		echo $this->Form->input('Actor');
		echo $this->Form->input('Project');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Keyword.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Keyword.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Keywords'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Actors'), array('controller' => 'actors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actor'), array('controller' => 'actors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
