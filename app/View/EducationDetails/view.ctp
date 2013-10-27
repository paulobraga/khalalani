<div class="educationDetails view">
<h2><?php  echo __('Education Detail'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($educationDetail['EducationDetail']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Level'); ?></dt>
		<dd>
			<?php echo $this->Html->link($educationDetail['Level']['name'], array('controller' => 'levels', 'action' => 'view', $educationDetail['Level']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Course'); ?></dt>
		<dd>
			<?php echo $this->Html->link($educationDetail['Course']['name'], array('controller' => 'courses', 'action' => 'view', $educationDetail['Course']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo $this->Html->link($educationDetail['Country']['name'], array('controller' => 'countries', 'action' => 'view', $educationDetail['Country']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($educationDetail['User']['id'], array('controller' => 'users', 'action' => 'view', $educationDetail['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Education Detail'), array('action' => 'edit', $educationDetail['EducationDetail']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Education Detail'), array('action' => 'delete', $educationDetail['EducationDetail']['id']), null, __('Are you sure you want to delete # %s?', $educationDetail['EducationDetail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Education Details'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Education Detail'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Levels'), array('controller' => 'levels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Level'), array('controller' => 'levels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
