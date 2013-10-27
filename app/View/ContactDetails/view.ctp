<div class="contactDetails view">
<h2><?php  echo __('Contact Detail'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contactDetail['ContactDetail']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo $this->Html->link($contactDetail['Country']['name'], array('controller' => 'countries', 'action' => 'view', $contactDetail['Country']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Province'); ?></dt>
		<dd>
			<?php echo $this->Html->link($contactDetail['Province']['name'], array('controller' => 'provinces', 'action' => 'view', $contactDetail['Province']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo $this->Html->link($contactDetail['City']['name'], array('controller' => 'cities', 'action' => 'view', $contactDetail['City']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address Street'); ?></dt>
		<dd>
			<?php echo h($contactDetail['ContactDetail']['address_street']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zipcode'); ?></dt>
		<dd>
			<?php echo h($contactDetail['ContactDetail']['zipcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Home Telephone'); ?></dt>
		<dd>
			<?php echo h($contactDetail['ContactDetail']['home_telephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mobile'); ?></dt>
		<dd>
			<?php echo h($contactDetail['ContactDetail']['mobile']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Personal Email'); ?></dt>
		<dd>
			<?php echo h($contactDetail['ContactDetail']['personal_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Work Email'); ?></dt>
		<dd>
			<?php echo h($contactDetail['ContactDetail']['work_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Other Email'); ?></dt>
		<dd>
			<?php echo h($contactDetail['ContactDetail']['other_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($contactDetail['User']['id'], array('controller' => 'users', 'action' => 'view', $contactDetail['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Contact Detail'), array('action' => 'edit', $contactDetail['ContactDetail']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Contact Detail'), array('action' => 'delete', $contactDetail['ContactDetail']['id']), null, __('Are you sure you want to delete # %s?', $contactDetail['ContactDetail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Contact Details'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact Detail'), array('action' => 'add')); ?> </li>
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
