<div class="complaintsLikes view">
<h2><?php  echo __('Complaints Like'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($complaintsLike['ComplaintsLike']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Complaint'); ?></dt>
		<dd>
			<?php echo $this->Html->link($complaintsLike['Complaint']['id'], array('controller' => 'complaints', 'action' => 'view', $complaintsLike['Complaint']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Consumer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($complaintsLike['Consumer']['id'], array('controller' => 'consumers', 'action' => 'view', $complaintsLike['Consumer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($complaintsLike['ComplaintsLike']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Complaints Like'), array('action' => 'edit', $complaintsLike['ComplaintsLike']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Complaints Like'), array('action' => 'delete', $complaintsLike['ComplaintsLike']['id']), null, __('Are you sure you want to delete # %s?', $complaintsLike['ComplaintsLike']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Complaints Likes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Complaints Like'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Complaints'), array('controller' => 'complaints', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Complaint'), array('controller' => 'complaints', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Consumers'), array('controller' => 'consumers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consumer'), array('controller' => 'consumers', 'action' => 'add')); ?> </li>
	</ul>
</div>
