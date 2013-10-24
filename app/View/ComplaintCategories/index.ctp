<div class="complaintCategories index">
	<h2><?php echo __('Complaint Categories'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('company_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($complaintCategories as $complaintCategory): ?>
	<tr>
		<td><?php echo h($complaintCategory['ComplaintCategory']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($complaintCategory['Company']['name'], array('controller' => 'companies', 'action' => 'view', $complaintCategory['Company']['id'])); ?>
		</td>
		<td><?php echo h($complaintCategory['ComplaintCategory']['name']); ?>&nbsp;</td>
		<td><?php echo h($complaintCategory['ComplaintCategory']['created']); ?>&nbsp;</td>
		<td><?php echo h($complaintCategory['ComplaintCategory']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $complaintCategory['ComplaintCategory']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $complaintCategory['ComplaintCategory']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $complaintCategory['ComplaintCategory']['id']), null, __('Are you sure you want to delete # %s?', $complaintCategory['ComplaintCategory']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Complaint Category'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
