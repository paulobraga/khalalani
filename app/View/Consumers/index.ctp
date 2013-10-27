<div class="consumers index">
	<h2><?php echo __('Consumers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($consumers as $consumer): ?>
	<tr>
		<td><?php echo h($consumer['Consumer']['id']); ?>&nbsp;</td>
		<td><?php echo h($consumer['Consumer']['user_id']); ?>&nbsp;</td>
		<td><?php echo h($consumer['Consumer']['created']); ?>&nbsp;</td>
		<td><?php echo h($consumer['Consumer']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $consumer['Consumer']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $consumer['Consumer']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $consumer['Consumer']['id']), null, __('Are you sure you want to delete # %s?', $consumer['Consumer']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Consumer'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Company Likes'), array('controller' => 'company_likes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company Like'), array('controller' => 'company_likes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Complaint Likes'), array('controller' => 'complaint_likes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Complaint Like'), array('controller' => 'complaint_likes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Complaints'), array('controller' => 'complaints', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Complaint'), array('controller' => 'complaints', 'action' => 'add')); ?> </li>
	</ul>
</div>
