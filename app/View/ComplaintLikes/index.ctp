<div class="complaintLikes index">
	<h2><?php echo __('Complaint Likes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('complaint_id'); ?></th>
			<th><?php echo $this->Paginator->sort('consumer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($complaintLikes as $complaintLike): ?>
	<tr>
		<td><?php echo h($complaintLike['ComplaintLike']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($complaintLike['Complaint']['id'], array('controller' => 'complaints', 'action' => 'view', $complaintLike['Complaint']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($complaintLike['Consumer']['id'], array('controller' => 'consumers', 'action' => 'view', $complaintLike['Consumer']['id'])); ?>
		</td>
		<td><?php echo h($complaintLike['ComplaintLike']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $complaintLike['ComplaintLike']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $complaintLike['ComplaintLike']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $complaintLike['ComplaintLike']['id']), null, __('Are you sure you want to delete # %s?', $complaintLike['ComplaintLike']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Complaint Like'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Complaints'), array('controller' => 'complaints', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Complaint'), array('controller' => 'complaints', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Consumers'), array('controller' => 'consumers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consumer'), array('controller' => 'consumers', 'action' => 'add')); ?> </li>
	</ul>
</div>
