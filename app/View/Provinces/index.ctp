<div class="provinces index">
	<h2><?php echo __('Provinces'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('country_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($provinces as $province): ?>
	<tr>
		<td><?php echo h($province['Province']['id']); ?>&nbsp;</td>
		<td><?php echo h($province['Province']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($province['Country']['name'], array('controller' => 'countries', 'action' => 'view', $province['Country']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $province['Province']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $province['Province']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $province['Province']['id']), null, __('Are you sure you want to delete # %s?', $province['Province']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Province'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Branches'), array('controller' => 'branches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Branch'), array('controller' => 'branches', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Consumers'), array('controller' => 'consumers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consumer'), array('controller' => 'consumers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contact Details'), array('controller' => 'contact_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact Detail'), array('controller' => 'contact_details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personal Details'), array('controller' => 'personal_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal Detail'), array('controller' => 'personal_details', 'action' => 'add')); ?> </li>
	</ul>
</div>
