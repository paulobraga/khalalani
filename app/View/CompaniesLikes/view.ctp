<div class="companiesLikes view">
<h2><?php  echo __('Companies Like'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($companiesLike['CompaniesLike']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($companiesLike['Company']['name'], array('controller' => 'companies', 'action' => 'view', $companiesLike['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Consumer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($companiesLike['Consumer']['id'], array('controller' => 'consumers', 'action' => 'view', $companiesLike['Consumer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($companiesLike['CompaniesLike']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Companies Like'), array('action' => 'edit', $companiesLike['CompaniesLike']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Companies Like'), array('action' => 'delete', $companiesLike['CompaniesLike']['id']), null, __('Are you sure you want to delete # %s?', $companiesLike['CompaniesLike']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies Likes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Companies Like'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Consumers'), array('controller' => 'consumers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consumer'), array('controller' => 'consumers', 'action' => 'add')); ?> </li>
	</ul>
</div>
