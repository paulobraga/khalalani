<div class="complaints form">
<?php echo $this->Form->create('Complaint'); ?>
	<fieldset>
		<legend><?php echo __('Edit Complaint'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('company_id');
		echo $this->Form->input('consumer_id');
		echo $this->Form->input('status');
		echo $this->Form->input('rate');
		echo $this->Form->input('review');
		echo $this->Form->input('description');
		echo $this->Form->input('privacy');
		echo $this->Form->input('allow_comments');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Complaint.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Complaint.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Complaints'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Consumers'), array('controller' => 'consumers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consumer'), array('controller' => 'consumers', 'action' => 'add')); ?> </li>
	</ul>
</div>
