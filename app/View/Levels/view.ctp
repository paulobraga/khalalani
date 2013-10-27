<div class="levels view">
<h2><?php  echo __('Level'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($level['Level']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($level['Level']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Level'), array('action' => 'edit', $level['Level']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Level'), array('action' => 'delete', $level['Level']['id']), null, __('Are you sure you want to delete # %s?', $level['Level']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Levels'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Level'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Education Details'), array('controller' => 'education_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Education Detail'), array('controller' => 'education_details', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Education Details'); ?></h3>
	<?php if (!empty($level['EducationDetail'])): ?>
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
		foreach ($level['EducationDetail'] as $educationDetail): ?>
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
