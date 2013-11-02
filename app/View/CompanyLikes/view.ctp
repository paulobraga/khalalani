<div class="companyLikes view">
<h2><?php  echo __('Company Like'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($companyLike['CompanyLike']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($companyLike['Company']['name'], array('controller' => 'companies', 'action' => 'view', $companyLike['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Consumer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($companyLike['Consumer']['id'], array('controller' => 'consumers', 'action' => 'view', $companyLike['Consumer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($companyLike['CompanyLike']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Company Like'), array('action' => 'edit', $companyLike['CompanyLike']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Company Like'), array('action' => 'delete', $companyLike['CompanyLike']['id']), null, __('Are you sure you want to delete # %s?', $companyLike['CompanyLike']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Company Likes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company Like'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Consumers'), array('controller' => 'consumers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consumer'), array('controller' => 'consumers', 'action' => 'add')); ?> </li>
	</ul>
</div>
