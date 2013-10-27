<div class="personalDetails view">
<h2><?php  echo __('Personal Detail'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($personalDetail['PersonalDetail']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($personalDetail['PersonalDetail']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Middle Name'); ?></dt>
		<dd>
			<?php echo h($personalDetail['PersonalDetail']['middle_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($personalDetail['PersonalDetail']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($personalDetail['PersonalDetail']['gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Birthday'); ?></dt>
		<dd>
			<?php echo h($personalDetail['PersonalDetail']['birthday']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Marital Status'); ?></dt>
		<dd>
			<?php echo h($personalDetail['PersonalDetail']['marital_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nationality'); ?></dt>
		<dd>
			<?php echo $this->Html->link($personalDetail['Nationality']['name'], array('controller' => 'nationalities', 'action' => 'view', $personalDetail['Nationality']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo $this->Html->link($personalDetail['Country']['name'], array('controller' => 'countries', 'action' => 'view', $personalDetail['Country']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Province'); ?></dt>
		<dd>
			<?php echo $this->Html->link($personalDetail['Province']['name'], array('controller' => 'provinces', 'action' => 'view', $personalDetail['Province']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo $this->Html->link($personalDetail['City']['name'], array('controller' => 'cities', 'action' => 'view', $personalDetail['City']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($personalDetail['User']['id'], array('controller' => 'users', 'action' => 'view', $personalDetail['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Personal Detail'), array('action' => 'edit', $personalDetail['PersonalDetail']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Personal Detail'), array('action' => 'delete', $personalDetail['PersonalDetail']['id']), null, __('Are you sure you want to delete # %s?', $personalDetail['PersonalDetail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Personal Details'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal Detail'), array('action' => 'add')); ?> </li>
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
