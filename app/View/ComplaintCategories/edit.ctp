<div class="complaintCategories form">
<?php echo $this->Form->create('ComplaintCategory'); ?>
	<fieldset>
		<legend><?php echo __('Edit Complaint Category'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('company_id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ComplaintCategory.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ComplaintCategory.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Complaint Categories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
