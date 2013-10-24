<div class="complaintsComments view">
<h2><?php  echo __('Complaints Comment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($complaintsComment['ComplaintsComment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($complaintsComment['User']['name'], array('controller' => 'users', 'action' => 'view', $complaintsComment['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($complaintsComment['ComplaintsComment']['comment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($complaintsComment['ComplaintsComment']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Deleted'); ?></dt>
		<dd>
			<?php echo h($complaintsComment['ComplaintsComment']['is_deleted']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($complaintsComment['ComplaintsComment']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Complaint'); ?></dt>
		<dd>
			<?php echo $this->Html->link($complaintsComment['Complaint']['id'], array('controller' => 'complaints', 'action' => 'view', $complaintsComment['Complaint']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Complaints Comment'), array('action' => 'edit', $complaintsComment['ComplaintsComment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Complaints Comment'), array('action' => 'delete', $complaintsComment['ComplaintsComment']['id']), null, __('Are you sure you want to delete # %s?', $complaintsComment['ComplaintsComment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Complaints Comments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Complaints Comment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Complaints'), array('controller' => 'complaints', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Complaint'), array('controller' => 'complaints', 'action' => 'add')); ?> </li>
	</ul>
</div>
