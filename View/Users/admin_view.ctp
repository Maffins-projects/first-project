<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fname'); ?></dt>
		<dd>
			<?php echo h($user['User']['fname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lname'); ?></dt>
		<dd>
			<?php echo h($user['User']['lname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cellnumber'); ?></dt>
		<dd>
			<?php echo h($user['User']['cellnumber']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Daytimenumber'); ?></dt>
		<dd>
			<?php echo h($user['User']['daytimenumber']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cabs'), array('controller' => 'cabs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cab'), array('controller' => 'cabs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Loads'), array('controller' => 'loads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Load'), array('controller' => 'loads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shuttles'), array('controller' => 'shuttles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shuttle'), array('controller' => 'shuttles', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Cabs'); ?></h3>
	<?php if (!empty($user['Cab'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Number Of Passengers'); ?></th>
		<th><?php echo __('Direction'); ?></th>
		<th><?php echo __('Payment Method'); ?></th>
		<th><?php echo __('Trailer'); ?></th>
		<th><?php echo __('Baby Seat'); ?></th>
		<th><?php echo __('Pickup Address'); ?></th>
		<th><?php echo __('Pickup City'); ?></th>
		<th><?php echo __('Pickup Province'); ?></th>
		<th><?php echo __('Pickup Postal Code'); ?></th>
		<th><?php echo __('Pickup Datetime'); ?></th>
		<th><?php echo __('To Address'); ?></th>
		<th><?php echo __('To City'); ?></th>
		<th><?php echo __('To Province'); ?></th>
		<th><?php echo __('To Postal Code'); ?></th>
		<th><?php echo __('To Datetime'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Cab'] as $cab): ?>
		<tr>
			<td><?php echo $cab['id']; ?></td>
			<td><?php echo $cab['user_id']; ?></td>
			<td><?php echo $cab['number_of_passengers']; ?></td>
			<td><?php echo $cab['direction']; ?></td>
			<td><?php echo $cab['payment_method']; ?></td>
			<td><?php echo $cab['trailer']; ?></td>
			<td><?php echo $cab['baby_seat']; ?></td>
			<td><?php echo $cab['pickup_address']; ?></td>
			<td><?php echo $cab['pickup_city']; ?></td>
			<td><?php echo $cab['pickup_province']; ?></td>
			<td><?php echo $cab['pickup_postal_code']; ?></td>
			<td><?php echo $cab['pickup_datetime']; ?></td>
			<td><?php echo $cab['to_address']; ?></td>
			<td><?php echo $cab['to_city']; ?></td>
			<td><?php echo $cab['to_province']; ?></td>
			<td><?php echo $cab['to_postal_code']; ?></td>
			<td><?php echo $cab['to_datetime']; ?></td>
			<td><?php echo $cab['modified']; ?></td>
			<td><?php echo $cab['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cabs', 'action' => 'view', $cab['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cabs', 'action' => 'edit', $cab['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cabs', 'action' => 'delete', $cab['id']), null, __('Are you sure you want to delete # %s?', $cab['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cab'), array('controller' => 'cabs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Loads'); ?></h3>
	<?php if (!empty($user['Load'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('From Address'); ?></th>
		<th><?php echo __('From Province'); ?></th>
		<th><?php echo __('From Postal Code'); ?></th>
		<th><?php echo __('From Floor'); ?></th>
		<th><?php echo __('From Elevator'); ?></th>
		<th><?php echo __('From Rooms'); ?></th>
		<th><?php echo __('To Address'); ?></th>
		<th><?php echo __('To Province'); ?></th>
		<th><?php echo __('To Postal Code'); ?></th>
		<th><?php echo __('To Floor'); ?></th>
		<th><?php echo __('To Elavator'); ?></th>
		<th><?php echo __('To Rooms'); ?></th>
		<th><?php echo __('Require Storage'); ?></th>
		<th><?php echo __('Require Full Assembly'); ?></th>
		<th><?php echo __('Packaging Service'); ?></th>
		<th><?php echo __('Move Date'); ?></th>
		<th><?php echo __('Inventory List'); ?></th>
		<th><?php echo __('Tips'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Load'] as $load): ?>
		<tr>
			<td><?php echo $load['id']; ?></td>
			<td><?php echo $load['user_id']; ?></td>
			<td><?php echo $load['from_address']; ?></td>
			<td><?php echo $load['from_province']; ?></td>
			<td><?php echo $load['from_postal_code']; ?></td>
			<td><?php echo $load['from_floor']; ?></td>
			<td><?php echo $load['from_elevator']; ?></td>
			<td><?php echo $load['from_rooms']; ?></td>
			<td><?php echo $load['to_address']; ?></td>
			<td><?php echo $load['to_province']; ?></td>
			<td><?php echo $load['to_postal_code']; ?></td>
			<td><?php echo $load['to_floor']; ?></td>
			<td><?php echo $load['to_elavator']; ?></td>
			<td><?php echo $load['to_rooms']; ?></td>
			<td><?php echo $load['require_storage']; ?></td>
			<td><?php echo $load['require_full_assembly']; ?></td>
			<td><?php echo $load['packaging_service']; ?></td>
			<td><?php echo $load['move_date']; ?></td>
			<td><?php echo $load['inventory_list']; ?></td>
			<td><?php echo $load['tips']; ?></td>
			<td><?php echo $load['modified']; ?></td>
			<td><?php echo $load['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'loads', 'action' => 'view', $load['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'loads', 'action' => 'edit', $load['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'loads', 'action' => 'delete', $load['id']), null, __('Are you sure you want to delete # %s?', $load['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Load'), array('controller' => 'loads', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Shuttles'); ?></h3>
	<?php if (!empty($user['Shuttle'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Number Of Passengers'); ?></th>
		<th><?php echo __('Direction'); ?></th>
		<th><?php echo __('Payment Method'); ?></th>
		<th><?php echo __('Trailer'); ?></th>
		<th><?php echo __('Baby Seat'); ?></th>
		<th><?php echo __('Pickup Address'); ?></th>
		<th><?php echo __('Pickup City'); ?></th>
		<th><?php echo __('Pickup Province'); ?></th>
		<th><?php echo __('Pickup Postal Code'); ?></th>
		<th><?php echo __('Pickup Flight Number'); ?></th>
		<th><?php echo __('Pickup Datetime'); ?></th>
		<th><?php echo __('To Address'); ?></th>
		<th><?php echo __('To City'); ?></th>
		<th><?php echo __('To Province'); ?></th>
		<th><?php echo __('To Postal Code'); ?></th>
		<th><?php echo __('To Flight Number'); ?></th>
		<th><?php echo __('To Datetime'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Shuttle'] as $shuttle): ?>
		<tr>
			<td><?php echo $shuttle['id']; ?></td>
			<td><?php echo $shuttle['user_id']; ?></td>
			<td><?php echo $shuttle['number_of_passengers']; ?></td>
			<td><?php echo $shuttle['direction']; ?></td>
			<td><?php echo $shuttle['payment_method']; ?></td>
			<td><?php echo $shuttle['trailer']; ?></td>
			<td><?php echo $shuttle['baby_seat']; ?></td>
			<td><?php echo $shuttle['pickup_address']; ?></td>
			<td><?php echo $shuttle['pickup_city']; ?></td>
			<td><?php echo $shuttle['pickup_province']; ?></td>
			<td><?php echo $shuttle['pickup_postal_code']; ?></td>
			<td><?php echo $shuttle['pickup_flight_number']; ?></td>
			<td><?php echo $shuttle['pickup_datetime']; ?></td>
			<td><?php echo $shuttle['to_address']; ?></td>
			<td><?php echo $shuttle['to_city']; ?></td>
			<td><?php echo $shuttle['to_province']; ?></td>
			<td><?php echo $shuttle['to_postal_code']; ?></td>
			<td><?php echo $shuttle['to_flight_number']; ?></td>
			<td><?php echo $shuttle['to_datetime']; ?></td>
			<td><?php echo $shuttle['modified']; ?></td>
			<td><?php echo $shuttle['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'shuttles', 'action' => 'view', $shuttle['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'shuttles', 'action' => 'edit', $shuttle['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'shuttles', 'action' => 'delete', $shuttle['id']), null, __('Are you sure you want to delete # %s?', $shuttle['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Shuttle'), array('controller' => 'shuttles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
