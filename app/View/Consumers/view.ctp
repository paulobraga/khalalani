<div class="consumers view">
<h2><?php  echo __('Consumer'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($consumer['Consumer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($consumer['Consumer']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($consumer['Consumer']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($consumer['Consumer']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Consumer'), array('action' => 'edit', $consumer['Consumer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Consumer'), array('action' => 'delete', $consumer['Consumer']['id']), null, __('Are you sure you want to delete # %s?', $consumer['Consumer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Consumers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consumer'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Company Likes'), array('controller' => 'company_likes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company Like'), array('controller' => 'company_likes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Complaint Likes'), array('controller' => 'complaint_likes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Complaint Like'), array('controller' => 'complaint_likes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Complaints'), array('controller' => 'complaints', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Complaint'), array('controller' => 'complaints', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Company Likes'); ?></h3>
	<?php if (!empty($consumer['CompanyLike'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Company Id'); ?></th>
		<th><?php echo __('Consumer Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($consumer['CompanyLike'] as $companyLike): ?>
		<tr>
			<td><?php echo $companyLike['id']; ?></td>
			<td><?php echo $companyLike['company_id']; ?></td>
			<td><?php echo $companyLike['consumer_id']; ?></td>
			<td><?php echo $companyLike['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'company_likes', 'action' => 'view', $companyLike['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'company_likes', 'action' => 'edit', $companyLike['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'company_likes', 'action' => 'delete', $companyLike['id']), null, __('Are you sure you want to delete # %s?', $companyLike['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Company Like'), array('controller' => 'company_likes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Complaint Likes'); ?></h3>
	<?php if (!empty($consumer['ComplaintLike'])): ?>
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
		foreach ($consumer['ComplaintLike'] as $complaintLike): ?>
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
<div class="related">
	<h3><?php echo __('Related Complaints'); ?></h3>
	<?php if (!empty($consumer['Complaint'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Company Id'); ?></th>
		<th><?php echo __('Consumer Id'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Rate'); ?></th>
		<th><?php echo __('Review'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Privacy'); ?></th>
		<th><?php echo __('Allow Comments'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($consumer['Complaint'] as $complaint): ?>
		<tr>
			<td><?php echo $complaint['id']; ?></td>
			<td><?php echo $complaint['company_id']; ?></td>
			<td><?php echo $complaint['consumer_id']; ?></td>
			<td><?php echo $complaint['status']; ?></td>
			<td><?php echo $complaint['rate']; ?></td>
			<td><?php echo $complaint['review']; ?></td>
			<td><?php echo $complaint['description']; ?></td>
			<td><?php echo $complaint['created']; ?></td>
			<td><?php echo $complaint['privacy']; ?></td>
			<td><?php echo $complaint['allow_comments']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'complaints', 'action' => 'view', $complaint['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'complaints', 'action' => 'edit', $complaint['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'complaints', 'action' => 'delete', $complaint['id']), null, __('Are you sure you want to delete # %s?', $complaint['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Complaint'), array('controller' => 'complaints', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
