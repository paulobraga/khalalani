<div class="courses form">
<?php echo $this->Form->create('Course'); ?>
	<fieldset>
		<legend><?php echo __('Edit Course'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Course.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Course.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Courses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Education Details'), array('controller' => 'education_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Education Detail'), array('controller' => 'education_details', 'action' => 'add')); ?> </li>
	</ul>
</div>
