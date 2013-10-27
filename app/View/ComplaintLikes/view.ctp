<div class="complaintLikes view">
<h2><?php  echo __('Complaint Like'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($complaintLike['ComplaintLike']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Complaint'); ?></dt>
		<dd>
			<?php echo $this->Html->link($complaintLike['Complaint']['id'], array('controller' => 'complaints', 'action' => 'view', $complaintLike['Complaint']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Consumer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($complaintLike['Consumer']['id'], array('controller' => 'consumers', 'action' => 'view', $complaintLike['Consumer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($complaintLike['ComplaintLike']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Complaint Like'), array('action' => 'edit', $complaintLike['ComplaintLike']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Complaint Like'), array('action' => 'delete', $complaintLike['ComplaintLike']['id']), null, __('Are you sure you want to delete # %s?', $complaintLike['ComplaintLike']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Complaint Likes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Complaint Like'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Complaints'), array('controller' => 'complaints', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Complaint'), array('controller' => 'complaints', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Consumers'), array('controller' => 'consumers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consumer'), array('controller' => 'consumers', 'action' => 'add')); ?> </li>
	</ul>
</div>
