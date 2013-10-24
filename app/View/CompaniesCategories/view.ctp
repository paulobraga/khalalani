<div class="companiesCategories view">
<h2><?php  echo __('Companies Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($companiesCategory['CompaniesCategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($companiesCategory['Company']['name'], array('controller' => 'companies', 'action' => 'view', $companiesCategory['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($companiesCategory['Category']['name'], array('controller' => 'categories', 'action' => 'view', $companiesCategory['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($companiesCategory['CompaniesCategory']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($companiesCategory['CompaniesCategory']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Companies Category'), array('action' => 'edit', $companiesCategory['CompaniesCategory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Companies Category'), array('action' => 'delete', $companiesCategory['CompaniesCategory']['id']), null, __('Are you sure you want to delete # %s?', $companiesCategory['CompaniesCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Companies Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
