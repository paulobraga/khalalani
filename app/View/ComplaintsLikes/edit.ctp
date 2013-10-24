<div class="complaintsLikes form">
<?php echo $this->Form->create('ComplaintsLike'); ?>
	<fieldset>
		<legend><?php echo __('Edit Complaints Like'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('complaint_id');
		echo $this->Form->input('consumer_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ComplaintsLike.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ComplaintsLike.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Complaints Likes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Complaints'), array('controller' => 'complaints', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Complaint'), array('controller' => 'complaints', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Consumers'), array('controller' => 'consumers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consumer'), array('controller' => 'consumers', 'action' => 'add')); ?> </li>
	</ul>
</div>
