<div class="complaintCategories view">
<h2><?php  echo __('Complaint Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($complaintCategory['ComplaintCategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($complaintCategory['Company']['name'], array('controller' => 'companies', 'action' => 'view', $complaintCategory['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($complaintCategory['ComplaintCategory']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($complaintCategory['ComplaintCategory']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($complaintCategory['ComplaintCategory']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Complaint Category'), array('action' => 'edit', $complaintCategory['ComplaintCategory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Complaint Category'), array('action' => 'delete', $complaintCategory['ComplaintCategory']['id']), null, __('Are you sure you want to delete # %s?', $complaintCategory['ComplaintCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Complaint Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Complaint Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
