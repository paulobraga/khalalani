<div class="complaintComments form">
<?php echo $this->Form->create('ComplaintComment'); ?>
	<fieldset>
		<legend><?php echo __('Add Complaint Comment'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('comment');
		echo $this->Form->input('is_deleted');
		echo $this->Form->input('status');
		echo $this->Form->input('complaint_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Complaint Comments'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Complaints'), array('controller' => 'complaints', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Complaint'), array('controller' => 'complaints', 'action' => 'add')); ?> </li>
	</ul>
</div>
