<div class="actors form">
<?php echo $this->Form->create('Actor'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Actor'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('firstName');
		echo $this->Form->input('lastName');
		echo $this->Form->input('email');
		echo $this->Form->input('description');
		echo $this->Form->input('type');
		echo $this->Form->input('file');
		echo $this->Form->input('Keyword');
		echo $this->Form->input('Project');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Actor.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Actor.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Actors'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Keywords'), array('controller' => 'keywords', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Keyword'), array('controller' => 'keywords', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
