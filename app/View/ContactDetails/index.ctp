<div class="contactDetails index">
	<h2><?php echo __('Contact Details'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('country_id'); ?></th>
			<th><?php echo $this->Paginator->sort('province_id'); ?></th>
			<th><?php echo $this->Paginator->sort('city_id'); ?></th>
			<th><?php echo $this->Paginator->sort('address_street'); ?></th>
			<th><?php echo $this->Paginator->sort('zipcode'); ?></th>
			<th><?php echo $this->Paginator->sort('home_telephone'); ?></th>
			<th><?php echo $this->Paginator->sort('mobile'); ?></th>
			<th><?php echo $this->Paginator->sort('personal_email'); ?></th>
			<th><?php echo $this->Paginator->sort('work_email'); ?></th>
			<th><?php echo $this->Paginator->sort('other_email'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($contactDetails as $contactDetail): ?>
	<tr>
		<td><?php echo h($contactDetail['ContactDetail']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($contactDetail['Country']['name'], array('controller' => 'countries', 'action' => 'view', $contactDetail['Country']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($contactDetail['Province']['name'], array('controller' => 'provinces', 'action' => 'view', $contactDetail['Province']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($contactDetail['City']['name'], array('controller' => 'cities', 'action' => 'view', $contactDetail['City']['id'])); ?>
		</td>
		<td><?php echo h($contactDetail['ContactDetail']['address_street']); ?>&nbsp;</td>
		<td><?php echo h($contactDetail['ContactDetail']['zipcode']); ?>&nbsp;</td>
		<td><?php echo h($contactDetail['ContactDetail']['home_telephone']); ?>&nbsp;</td>
		<td><?php echo h($contactDetail['ContactDetail']['mobile']); ?>&nbsp;</td>
		<td><?php echo h($contactDetail['ContactDetail']['personal_email']); ?>&nbsp;</td>
		<td><?php echo h($contactDetail['ContactDetail']['work_email']); ?>&nbsp;</td>
		<td><?php echo h($contactDetail['ContactDetail']['other_email']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($contactDetail['User']['id'], array('controller' => 'users', 'action' => 'view', $contactDetail['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $contactDetail['ContactDetail']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $contactDetail['ContactDetail']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $contactDetail['ContactDetail']['id']), null, __('Are you sure you want to delete # %s?', $contactDetail['ContactDetail']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Contact Detail'), array('action' => 'add')); ?></li>
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
