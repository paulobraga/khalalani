<div class="nationalities view">
<h2><?php  echo __('Nationality'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($nationality['Nationality']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($nationality['Nationality']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Nationality'), array('action' => 'edit', $nationality['Nationality']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Nationality'), array('action' => 'delete', $nationality['Nationality']['id']), null, __('Are you sure you want to delete # %s?', $nationality['Nationality']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Nationalities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nationality'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Consumers'), array('controller' => 'consumers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consumer'), array('controller' => 'consumers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Consumers'); ?></h3>
	<?php if (!empty($nationality['Consumer'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Birthday'); ?></th>
		<th><?php echo __('Hometown'); ?></th>
		<th><?php echo __('Location'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Nationality Id'); ?></th>
		<th><?php echo __('Gender'); ?></th>
		<th><?php echo __('Picture'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($nationality['Consumer'] as $consumer): ?>
		<tr>
			<td><?php echo $consumer['id']; ?></td>
			<td><?php echo $consumer['birthday']; ?></td>
			<td><?php echo $consumer['hometown']; ?></td>
			<td><?php echo $consumer['location']; ?></td>
			<td><?php echo $consumer['created']; ?></td>
			<td><?php echo $consumer['modified']; ?></td>
			<td><?php echo $consumer['nationality_id']; ?></td>
			<td><?php echo $consumer['gender']; ?></td>
			<td><?php echo $consumer['picture']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'consumers', 'action' => 'view', $consumer['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'consumers', 'action' => 'edit', $consumer['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'consumers', 'action' => 'delete', $consumer['id']), null, __('Are you sure you want to delete # %s?', $consumer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Consumer'), array('controller' => 'consumers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
