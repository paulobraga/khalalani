<div class="complaints index">
	<h2><?php echo __('Complaints'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('company_id'); ?></th>
			<th><?php echo $this->Paginator->sort('consumer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('rate'); ?></th>
			<th><?php echo $this->Paginator->sort('review'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('privacy'); ?></th>
			<th><?php echo $this->Paginator->sort('allow_comments'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($complaints as $complaint): ?>
	<tr>
		<td><?php echo h($complaint['Complaint']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($complaint['Company']['name'], array('controller' => 'companies', 'action' => 'view', $complaint['Company']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($complaint['Consumer']['id'], array('controller' => 'consumers', 'action' => 'view', $complaint['Consumer']['id'])); ?>
		</td>
		<td><?php echo h($complaint['Complaint']['status']); ?>&nbsp;</td>
		<td><?php echo h($complaint['Complaint']['rate']); ?>&nbsp;</td>
		<td><?php echo h($complaint['Complaint']['review']); ?>&nbsp;</td>
		<td><?php echo h($complaint['Complaint']['description']); ?>&nbsp;</td>
		<td><?php echo h($complaint['Complaint']['created']); ?>&nbsp;</td>
		<td><?php echo h($complaint['Complaint']['privacy']); ?>&nbsp;</td>
		<td><?php echo h($complaint['Complaint']['allow_comments']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $complaint['Complaint']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $complaint['Complaint']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $complaint['Complaint']['id']), null, __('Are you sure you want to delete # %s?', $complaint['Complaint']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Complaint'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Consumers'), array('controller' => 'consumers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consumer'), array('controller' => 'consumers', 'action' => 'add')); ?> </li>
	</ul>
</div>
