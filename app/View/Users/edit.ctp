<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('password');
		echo $this->Form->input('status');
		echo $this->Form->input('username');
		echo $this->Form->input('group_id');
		echo $this->Form->input('photo');
		echo $this->Form->input('photo_dir');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Consumers'), array('controller' => 'consumers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consumer'), array('controller' => 'consumers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contact Details'), array('controller' => 'contact_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact Detail'), array('controller' => 'contact_details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Managers'), array('controller' => 'managers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Manager'), array('controller' => 'managers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Operators'), array('controller' => 'operators', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operator'), array('controller' => 'operators', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personal Details'), array('controller' => 'personal_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal Detail'), array('controller' => 'personal_details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Complaints Comments'), array('controller' => 'complaints_comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Complaints Comment'), array('controller' => 'complaints_comments', 'action' => 'add')); ?> </li>
	</ul>
</div>
