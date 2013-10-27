<div class="countries form">
<?php echo $this->Form->create('Country'); ?>
	<fieldset>
		<legend><?php echo __('Edit Country'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Country.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Country.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Countries'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Consumers'), array('controller' => 'consumers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consumer'), array('controller' => 'consumers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contact Details'), array('controller' => 'contact_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact Detail'), array('controller' => 'contact_details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Education Details'), array('controller' => 'education_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Education Detail'), array('controller' => 'education_details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personal Details'), array('controller' => 'personal_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal Detail'), array('controller' => 'personal_details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Provinces'), array('controller' => 'provinces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Province'), array('controller' => 'provinces', 'action' => 'add')); ?> </li>
	</ul>
</div>
