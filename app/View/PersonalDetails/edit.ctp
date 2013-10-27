<div class="personalDetails form">
<?php echo $this->Form->create('PersonalDetail'); ?>
	<fieldset>
		<legend><?php echo __('Edit Personal Detail'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('first_name');
		echo $this->Form->input('middle_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('gender');
		echo $this->Form->input('birthday');
		echo $this->Form->input('marital_status_id');
		echo $this->Form->input('nationality_id');
		echo $this->Form->input('country_id');
		echo $this->Form->input('province_id');
		echo $this->Form->input('city_id');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PersonalDetail.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PersonalDetail.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Personal Details'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Marital Statuses'), array('controller' => 'marital_statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Marital Status'), array('controller' => 'marital_statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Nationalities'), array('controller' => 'nationalities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nationality'), array('controller' => 'nationalities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Provinces'), array('controller' => 'provinces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Province'), array('controller' => 'provinces', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
