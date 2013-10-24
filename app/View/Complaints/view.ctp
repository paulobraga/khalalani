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
	</ul>
</div>
