<div class="consumers view">
<h2><?php  echo __('Consumer'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($consumer['Consumer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Birthday'); ?></dt>
		<dd>
			<?php echo h($consumer['Consumer']['birthday']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hometown'); ?></dt>
		<dd>
			<?php echo h($consumer['Consumer']['hometown']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo h($consumer['Consumer']['location']); ?>
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
		<dt><?php echo __('Nationality'); ?></dt>
		<dd>
			<?php echo $this->Html->link($consumer['Nationality']['name'], array('controller' => 'nationalities', 'action' => 'view', $consumer['Nationality']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($consumer['Consumer']['gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Picture'); ?></dt>
		<dd>
			<?php echo h($consumer['Consumer']['picture']); ?>
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
<div class="related">
	<h3><?php echo __('Related Companies Likes'); ?></h3>
	<?php if (!empty($consumer['CompaniesLike'])): ?>
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
		foreach ($consumer['CompaniesLike'] as $companiesLike): ?>
		<tr>
			<td><?php echo $companiesLike['id']; ?></td>
			<td><?php echo $companiesLike['company_id']; ?></td>
			<td><?php echo $companiesLike['consumer_id']; ?></td>
			<td><?php echo $companiesLike['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'companies_likes', 'action' => 'view', $companiesLike['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'companies_likes', 'action' => 'edit', $companiesLike['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'companies_likes', 'action' => 'delete', $companiesLike['id']), null, __('Are you sure you want to delete # %s?', $companiesLike['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Companies Like'), array('controller' => 'companies_likes', 'action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Complaints Likes'); ?></h3>
	<?php if (!empty($consumer['ComplaintsLike'])): ?>
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
		foreach ($consumer['ComplaintsLike'] as $complaintsLike): ?>
		<tr>
			<td><?php echo $complaintsLike['id']; ?></td>
			<td><?php echo $complaintsLike['complaint_id']; ?></td>
			<td><?php echo $complaintsLike['consumer_id']; ?></td>
			<td><?php echo $complaintsLike['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'complaints_likes', 'action' => 'view', $complaintsLike['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'complaints_likes', 'action' => 'edit', $complaintsLike['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'complaints_likes', 'action' => 'delete', $complaintsLike['id']), null, __('Are you sure you want to delete # %s?', $complaintsLike['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Complaints Like'), array('controller' => 'complaints_likes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
