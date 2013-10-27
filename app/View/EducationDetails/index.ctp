<div class="educationDetails index">
	<h2><?php echo __('Education Details'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('level_id'); ?></th>
			<th><?php echo $this->Paginator->sort('course_id'); ?></th>
			<th><?php echo $this->Paginator->sort('country_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($educationDetails as $educationDetail): ?>
	<tr>
		<td><?php echo h($educationDetail['EducationDetail']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($educationDetail['Level']['name'], array('controller' => 'levels', 'action' => 'view', $educationDetail['Level']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($educationDetail['Course']['name'], array('controller' => 'courses', 'action' => 'view', $educationDetail['Course']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($educationDetail['Country']['name'], array('controller' => 'countries', 'action' => 'view', $educationDetail['Country']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($educationDetail['User']['id'], array('controller' => 'users', 'action' => 'view', $educationDetail['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $educationDetail['EducationDetail']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $educationDetail['EducationDetail']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $educationDetail['EducationDetail']['id']), null, __('Are you sure you want to delete # %s?', $educationDetail['EducationDetail']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Education Detail'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Levels'), array('controller' => 'levels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Level'), array('controller' => 'levels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
