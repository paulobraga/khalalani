<div class="consumers form">
<?php echo $this->Form->create('Consumer'); ?>
	<fieldset>
		<legend><?php echo __('Edit Consumer'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Consumer.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Consumer.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Consumers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Company Likes'), array('controller' => 'company_likes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company Like'), array('controller' => 'company_likes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Complaint Likes'), array('controller' => 'complaint_likes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Complaint Like'), array('controller' => 'complaint_likes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Complaints'), array('controller' => 'complaints', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Complaint'), array('controller' => 'complaints', 'action' => 'add')); ?> </li>
	</ul>
</div>
