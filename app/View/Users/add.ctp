<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
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
