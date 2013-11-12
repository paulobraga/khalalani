<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		
		
		echo $this->Form->input('username');
                echo $this->Form->input('password');
                echo $this->Form->input('password_confirmation');
		echo $this->Form->input('group_id');
		echo $this->Form->input('photo');
		echo $this->Form->input('photo_dir');
                echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
