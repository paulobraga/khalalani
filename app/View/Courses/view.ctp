<div class="courses view">
<h2><?php  echo __('Course'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($course['Course']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($course['Course']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Course'), array('action' => 'edit', $course['Course']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Course'), array('action' => 'delete', $course['Course']['id']), null, __('Are you sure you want to delete # %s?', $course['Course']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Education Details'), array('controller' => 'education_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Education Detail'), array('controller' => 'education_details', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Education Details'); ?></h3>
	<?php if (!empty($course['EducationDetail'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Level Id'); ?></th>
		<th><?php echo __('Course Id'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($course['EducationDetail'] as $educationDetail): ?>
		<tr>
			<td><?php echo $educationDetail['id']; ?></td>
			<td><?php echo $educationDetail['level_id']; ?></td>
			<td><?php echo $educationDetail['course_id']; ?></td>
			<td><?php echo $educationDetail['country_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'education_details', 'action' => 'view', $educationDetail['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'education_details', 'action' => 'edit', $educationDetail['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'education_details', 'action' => 'delete', $educationDetail['id']), null, __('Are you sure you want to delete # %s?', $educationDetail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Education Detail'), array('controller' => 'education_details', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
