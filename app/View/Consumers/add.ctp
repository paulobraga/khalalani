<div class="consumers form">
<?php echo $this->Form->create('Consumer'); ?>
	<fieldset>
		<legend><?php echo __('Add Consumer'); ?></legend>
	<?php
		echo $this->Form->input('birthday');
		echo $this->Form->input('hometown');
		echo $this->Form->input('location');
		echo $this->Form->input('nationality_id');
		echo $this->Form->input('gender');
		echo $this->Form->input('picture');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Consumers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Nationalities'), array('controller' => 'nationalities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nationality'), array('controller' => 'nationalities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies Likes'), array('controller' => 'companies_likes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Companies Like'), array('controller' => 'companies_likes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Complaints'), array('controller' => 'complaints', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Complaint'), array('controller' => 'complaints', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Complaints Likes'), array('controller' => 'complaints_likes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Complaints Like'), array('controller' => 'complaints_likes', 'action' => 'add')); ?> </li>
	</ul>
</div>
