<div class="countries view">
<h2><?php  echo __('Country'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($country['Country']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($country['Country']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Country'), array('action' => 'edit', $country['Country']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Country'), array('action' => 'delete', $country['Country']['id']), null, __('Are you sure you want to delete # %s?', $country['Country']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Consumers'), array('controller' => 'consumers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consumer'), array('controller' => 'consumers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contact Details'), array('controller' => 'contact_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact Detail'), array('controller' => 'contact_details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Education Details'), array('controller' => 'education_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Education Detail'), array('controller' => 'education_details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personal Details'), array('controller' => 'personal_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal Detail'), array('controller' => 'personal_details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Provinces'), array('controller' => 'provinces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Province'), array('controller' => 'provinces', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Consumers'); ?></h3>
	<?php if (!empty($country['Consumer'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Birthday'); ?></th>
		<th><?php echo __('Hometown'); ?></th>
		<th><?php echo __('Nationality Id'); ?></th>
		<th><?php echo __('Gender'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('Province Id'); ?></th>
		<th><?php echo __('City Id'); ?></th>
		<th><?php echo __('Cell No'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($country['Consumer'] as $consumer): ?>
		<tr>
			<td><?php echo $consumer['id']; ?></td>
			<td><?php echo $consumer['birthday']; ?></td>
			<td><?php echo $consumer['hometown']; ?></td>
			<td><?php echo $consumer['nationality_id']; ?></td>
			<td><?php echo $consumer['gender']; ?></td>
			<td><?php echo $consumer['user_id']; ?></td>
			<td><?php echo $consumer['country_id']; ?></td>
			<td><?php echo $consumer['province_id']; ?></td>
			<td><?php echo $consumer['city_id']; ?></td>
			<td><?php echo $consumer['cell_no']; ?></td>
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
	<?php if (!empty($country['ContactDetail'])): ?>
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
		foreach ($country['ContactDetail'] as $contactDetail): ?>
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
	<h3><?php echo __('Related Education Details'); ?></h3>
	<?php if (!empty($country['EducationDetail'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Level Id'); ?></th>
		<th><?php echo __('Course Id'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($country['EducationDetail'] as $educationDetail): ?>
		<tr>
			<td><?php echo $educationDetail['id']; ?></td>
			<td><?php echo $educationDetail['level_id']; ?></td>
			<td><?php echo $educationDetail['course_id']; ?></td>
			<td><?php echo $educationDetail['country_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'education_details', 'action' => 'view', $educationDetail['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'education_details', 'action' => 'edit', $educationDetail['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'education_details', 'action' => 'delete', $educationDetail['id']), null, __('Are you sure you want to delete # %s?', $educationDetail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Education Detail'), array('controller' => 'education_details', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Personal Details'); ?></h3>
	<?php if (!empty($country['PersonalDetail'])): ?>
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
		foreach ($country['PersonalDetail'] as $personalDetail): ?>
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
<div class="related">
	<h3><?php echo __('Related Provinces'); ?></h3>
	<?php if (!empty($country['Province'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($country['Province'] as $province): ?>
		<tr>
			<td><?php echo $province['id']; ?></td>
			<td><?php echo $province['name']; ?></td>
			<td><?php echo $province['country_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'provinces', 'action' => 'view', $province['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'provinces', 'action' => 'edit', $province['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'provinces', 'action' => 'delete', $province['id']), null, __('Are you sure you want to delete # %s?', $province['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Province'), array('controller' => 'provinces', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
