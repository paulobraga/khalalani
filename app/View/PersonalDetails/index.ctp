<div class="personalDetails index">
	<h2><?php echo __('Personal Details'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('middle_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('gender'); ?></th>
			<th><?php echo $this->Paginator->sort('birthday'); ?></th>
			<th><?php echo $this->Paginator->sort('marital_status_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nationality_id'); ?></th>
			<th><?php echo $this->Paginator->sort('country_id'); ?></th>
			<th><?php echo $this->Paginator->sort('province_id'); ?></th>
			<th><?php echo $this->Paginator->sort('city_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($personalDetails as $personalDetail): ?>
	<tr>
		<td><?php echo h($personalDetail['PersonalDetail']['id']); ?>&nbsp;</td>
		<td><?php echo h($personalDetail['PersonalDetail']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($personalDetail['PersonalDetail']['middle_name']); ?>&nbsp;</td>
		<td><?php echo h($personalDetail['PersonalDetail']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($personalDetail['PersonalDetail']['gender']); ?>&nbsp;</td>
		<td><?php echo h($personalDetail['PersonalDetail']['birthday']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($personalDetail['MaritalStatus']['name'], array('controller' => 'marital_statuses', 'action' => 'view', $personalDetail['MaritalStatus']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($personalDetail['Nationality']['name'], array('controller' => 'nationalities', 'action' => 'view', $personalDetail['Nationality']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($personalDetail['Country']['name'], array('controller' => 'countries', 'action' => 'view', $personalDetail['Country']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($personalDetail['Province']['name'], array('controller' => 'provinces', 'action' => 'view', $personalDetail['Province']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($personalDetail['City']['name'], array('controller' => 'cities', 'action' => 'view', $personalDetail['City']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($personalDetail['User']['id'], array('controller' => 'users', 'action' => 'view', $personalDetail['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $personalDetail['PersonalDetail']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $personalDetail['PersonalDetail']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $personalDetail['PersonalDetail']['id']), null, __('Are you sure you want to delete # %s?', $personalDetail['PersonalDetail']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Personal Detail'), array('action' => 'add')); ?></li>
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
