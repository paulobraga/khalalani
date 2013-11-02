<div class="complaints view">
<h2><?php  echo __('Complaint'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($complaint['Complaint']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($complaint['Company']['name'], array('controller' => 'companies', 'action' => 'view', $complaint['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Consumer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($complaint['Consumer']['id'], array('controller' => 'consumers', 'action' => 'view', $complaint['Consumer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($complaint['Complaint']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rate'); ?></dt>
		<dd>
			<?php echo h($complaint['Complaint']['rate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Review'); ?></dt>
		<dd>
			<?php echo h($complaint['Complaint']['review']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($complaint['Complaint']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($complaint['Complaint']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Privacy'); ?></dt>
		<dd>
			<?php echo h($complaint['Complaint']['privacy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Allow Comments'); ?></dt>
		<dd>
			<?php echo h($complaint['Complaint']['allow_comments']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subject'); ?></dt>
		<dd>
			<?php echo h($complaint['Complaint']['subject']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Complaint Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($complaint['ComplaintCategory']['name'], array('controller' => 'complaint_categories', 'action' => 'view', $complaint['ComplaintCategory']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Complaint'), array('action' => 'edit', $complaint['Complaint']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Complaint'), array('action' => 'delete', $complaint['Complaint']['id']), null, __('Are you sure you want to delete # %s?', $complaint['Complaint']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Complaints'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Complaint'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Consumers'), array('controller' => 'consumers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consumer'), array('controller' => 'consumers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Complaint Categories'), array('controller' => 'complaint_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Complaint Category'), array('controller' => 'complaint_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Complaint Comments'), array('controller' => 'complaint_comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Complaint Comment'), array('controller' => 'complaint_comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Complaint Likes'), array('controller' => 'complaint_likes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Complaint Like'), array('controller' => 'complaint_likes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Complaint Comments'); ?></h3>
	<?php if (!empty($complaint['ComplaintComment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Is Deleted'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Complaint Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($complaint['ComplaintComment'] as $complaintComment): ?>
		<tr>
			<td><?php echo $complaintComment['id']; ?></td>
			<td><?php echo $complaintComment['user_id']; ?></td>
			<td><?php echo $complaintComment['comment']; ?></td>
			<td><?php echo $complaintComment['created']; ?></td>
			<td><?php echo $complaintComment['is_deleted']; ?></td>
			<td><?php echo $complaintComment['status']; ?></td>
			<td><?php echo $complaintComment['complaint_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'complaint_comments', 'action' => 'view', $complaintComment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'complaint_comments', 'action' => 'edit', $complaintComment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'complaint_comments', 'action' => 'delete', $complaintComment['id']), null, __('Are you sure you want to delete # %s?', $complaintComment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Complaint Comment'), array('controller' => 'complaint_comments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Complaint Likes'); ?></h3>
	<?php if (!empty($complaint['ComplaintLike'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Complaint Id'); ?></th>
		<th><?php echo __('Consumer Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($complaint['ComplaintLike'] as $complaintLike): ?>
		<tr>
			<td><?php echo $complaintLike['id']; ?></td>
			<td><?php echo $complaintLike['complaint_id']; ?></td>
			<td><?php echo $complaintLike['consumer_id']; ?></td>
			<td><?php echo $complaintLike['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'complaint_likes', 'action' => 'view', $complaintLike['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'complaint_likes', 'action' => 'edit', $complaintLike['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'complaint_likes', 'action' => 'delete', $complaintLike['id']), null, __('Are you sure you want to delete # %s?', $complaintLike['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Complaint Like'), array('controller' => 'complaint_likes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
