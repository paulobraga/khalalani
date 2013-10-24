<div class="companiesLikes index">
	<h2><?php echo __('Companies Likes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('company_id'); ?></th>
			<th><?php echo $this->Paginator->sort('consumer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($companiesLikes as $companiesLike): ?>
	<tr>
		<td><?php echo h($companiesLike['CompaniesLike']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($companiesLike['Company']['name'], array('controller' => 'companies', 'action' => 'view', $companiesLike['Company']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($companiesLike['Consumer']['id'], array('controller' => 'consumers', 'action' => 'view', $companiesLike['Consumer']['id'])); ?>
		</td>
		<td><?php echo h($companiesLike['CompaniesLike']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $companiesLike['CompaniesLike']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $companiesLike['CompaniesLike']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $companiesLike['CompaniesLike']['id']), null, __('Are you sure you want to delete # %s?', $companiesLike['CompaniesLike']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Companies Like'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Consumers'), array('controller' => 'consumers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consumer'), array('controller' => 'consumers', 'action' => 'add')); ?> </li>
	</ul>
</div>
