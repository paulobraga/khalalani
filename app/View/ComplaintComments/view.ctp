<div class="complaintComments view">
<h2><?php  echo __('Complaint Comment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($complaintComment['ComplaintComment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($complaintComment['User']['id'], array('controller' => 'users', 'action' => 'view', $complaintComment['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($complaintComment['ComplaintComment']['comment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($complaintComment['ComplaintComment']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Deleted'); ?></dt>
		<dd>
			<?php echo h($complaintComment['ComplaintComment']['is_deleted']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($complaintComment['ComplaintComment']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Complaint'); ?></dt>
		<dd>
			<?php echo $this->Html->link($complaintComment['Complaint']['id'], array('controller' => 'complaints', 'action' => 'view', $complaintComment['Complaint']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Complaint Comment'), array('action' => 'edit', $complaintComment['ComplaintComment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Complaint Comment'), array('action' => 'delete', $complaintComment['ComplaintComment']['id']), null, __('Are you sure you want to delete # %s?', $complaintComment['ComplaintComment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Complaint Comments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Complaint Comment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Complaints'), array('controller' => 'complaints', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Complaint'), array('controller' => 'complaints', 'action' => 'add')); ?> </li>
	</ul>
</div>
