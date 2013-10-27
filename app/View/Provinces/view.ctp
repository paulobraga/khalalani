<div class="provinces view">
<h2><?php  echo __('Province'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($province['Province']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($province['Province']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo $this->Html->link($province['Country']['name'], array('controller' => 'countries', 'action' => 'view', $province['Country']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Province'), array('action' => 'edit', $province['Province']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Province'), array('action' => 'delete', $province['Province']['id']), null, __('Are you sure you want to delete # %s?', $province['Province']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Provinces'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Province'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Branches'), array('controller' => 'branches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Branch'), array('controller' => 'branches', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Consumers'), array('controller' => 'consumers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consumer'), array('controller' => 'consumers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contact Details'), array('controller' => 'contact_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact Detail'), array('controller' => 'contact_details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personal Details'), array('controller' => 'personal_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal Detail'), array('controller' => 'personal_details', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Branches'); ?></h3>
	<?php if (!empty($province['Branch'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Province Id'); ?></th>
		<th><?php echo __('City Id'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Company Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($province['Branch'] as $branch): ?>
		<tr>
			<td><?php echo $branch['id']; ?></td>
			<td><?php echo $branch['province_id']; ?></td>
			<td><?php echo $branch['city_id']; ?></td>
			<td><?php echo $branch['address']; ?></td>
			<td><?php echo $branch['company_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'branches', 'action' => 'view', $branch['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'branches', 'action' => 'edit', $branch['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'branches', 'action' => 'delete', $branch['id']), null, __('Are you sure you want to delete # %s?', $branch['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Branch'), array('controller' => 'branches', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Cities'); ?></h3>
	<?php if (!empty($province['City'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Province Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($province['City'] as $city): ?>
		<tr>
			<td><?php echo $city['id']; ?></td>
			<td><?php echo $city['province_id']; ?></td>
			<td><?php echo $city['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cities', 'action' => 'view', $city['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cities', 'action' => 'edit', $city['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cities', 'action' => 'delete', $city['id']), null, __('Are you sure you want to delete # %s?', $city['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Consumers'); ?></h3>
	<?php if (!empty($province['Consumer'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($province['Consumer'] as $consumer): ?>
		<tr>
			<td><?php echo $consumer['id']; ?></td>
			<td><?php echo $consumer['user_id']; ?></td>
			<td><?php echo $consumer['created']; ?></td>
			<td><?php echo $consumer['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'consumers', 'action' => 'view', $consumer['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'consumers', 'action' => 'edit', $consumer['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'consumers', 'action' => 'delete', $consumer['id']), null, __('Are you sure you want to delete # %s?', $consumer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Consumer'), array('controller' => 'consumers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Contact Details'); ?></h3>
	<?php if (!empty($province['ContactDetail'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('Province Id'); ?></th>
		<th><?php echo __('City Id'); ?></th>
		<th><?php echo __('Address Street'); ?></th>
		<th><?php echo __('Zipcode'); ?></th>
		<th><?php echo __('Home Telephone'); ?></th>
		<th><?php echo __('Mobile'); ?></th>
		<th><?php echo __('Personal Email'); ?></th>
		<th><?php echo __('Work Email'); ?></th>
		<th><?php echo __('Other Email'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($province['ContactDetail'] as $contactDetail): ?>
		<tr>
			<td><?php echo $contactDetail['id']; ?></td>
			<td><?php echo $contactDetail['country_id']; ?></td>
			<td><?php echo $contactDetail['province_id']; ?></td>
			<td><?php echo $contactDetail['city_id']; ?></td>
			<td><?php echo $contactDetail['address_street']; ?></td>
			<td><?php echo $contactDetail['zipcode']; ?></td>
			<td><?php echo $contactDetail['home_telephone']; ?></td>
			<td><?php echo $contactDetail['mobile']; ?></td>
			<td><?php echo $contactDetail['personal_email']; ?></td>
			<td><?php echo $contactDetail['work_email']; ?></td>
			<td><?php echo $contactDetail['other_email']; ?></td>
			<td><?php echo $contactDetail['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'contact_details', 'action' => 'view', $contactDetail['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'contact_details', 'action' => 'edit', $contactDetail['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'contact_details', 'action' => 'delete', $contactDetail['id']), null, __('Are you sure you want to delete # %s?', $contactDetail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Contact Detail'), array('controller' => 'contact_details', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Personal Details'); ?></h3>
	<?php if (!empty($province['PersonalDetail'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Middle Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Gender'); ?></th>
		<th><?php echo __('Birthday'); ?></th>
		<th><?php echo __('Marital Status'); ?></th>
		<th><?php echo __('Nationality Id'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('Province Id'); ?></th>
		<th><?php echo __('City Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($province['PersonalDetail'] as $personalDetail): ?>
		<tr>
			<td><?php echo $personalDetail['id']; ?></td>
			<td><?php echo $personalDetail['first_name']; ?></td>
			<td><?php echo $personalDetail['middle_name']; ?></td>
			<td><?php echo $personalDetail['last_name']; ?></td>
			<td><?php echo $personalDetail['gender']; ?></td>
			<td><?php echo $personalDetail['birthday']; ?></td>
			<td><?php echo $personalDetail['marital_status']; ?></td>
			<td><?php echo $personalDetail['nationality_id']; ?></td>
			<td><?php echo $personalDetail['country_id']; ?></td>
			<td><?php echo $personalDetail['province_id']; ?></td>
			<td><?php echo $personalDetail['city_id']; ?></td>
			<td><?php echo $personalDetail['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'personal_details', 'action' => 'view', $personalDetail['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'personal_details', 'action' => 'edit', $personalDetail['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'personal_details', 'action' => 'delete', $personalDetail['id']), null, __('Are you sure you want to delete # %s?', $personalDetail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Personal Detail'), array('controller' => 'personal_details', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
