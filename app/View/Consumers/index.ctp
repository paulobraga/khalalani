<div class="consumers index">
	<h2><?php echo __('Consumers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('birthday'); ?></th>
			<th><?php echo $this->Paginator->sort('hometown'); ?></th>
			<th><?php echo $this->Paginator->sort('location'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('nationality_id'); ?></th>
			<th><?php echo $this->Paginator->sort('gender'); ?></th>
			<th><?php echo $this->Paginator->sort('picture'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($consumers as $consumer): ?>
	<tr>
		<td><?php echo h($consumer['Consumer']['id']); ?>&nbsp;</td>
		<td><?php echo h($consumer['Consumer']['birthday']); ?>&nbsp;</td>
		<td><?php echo h($consumer['Consumer']['hometown']); ?>&nbsp;</td>
		<td><?php echo h($consumer['Consumer']['location']); ?>&nbsp;</td>
		<td><?php echo h($consumer['Consumer']['created']); ?>&nbsp;</td>
		<td><?php echo h($consumer['Consumer']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($consumer['Nationality']['name'], array('controller' => 'nationalities', 'action' => 'view', $consumer['Nationality']['id'])); ?>
		</td>
		<td><?php echo h($consumer['Consumer']['gender']); ?>&nbsp;</td>
		<td><?php echo h($consumer['Consumer']['picture']); ?>&nbsp;</td>
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
		<li><?php echo $this->Html->link(__('List Nationalities'), array('controller' => 'nationalities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nationality'), array('controller' => 'nationalities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies Likes'), array('controller' => 'companies_likes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Companies Like'), array('controller' => 'companies_likes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Complaints'), array('controller' => 'complaints', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Complaint'), array('controller' => 'complaints', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Complaints Likes'), array('controller' => 'complaints_likes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Complaints Like'), array('controller' => 'complaints_likes', 'action' => 'add')); ?> </li>
	</ul>
</div>
