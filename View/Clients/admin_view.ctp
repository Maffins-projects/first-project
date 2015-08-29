<div class="clients view">
<h2><?php echo __('Client'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($client['Client']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fname'); ?></dt>
		<dd>
			<?php echo h($client['Client']['fname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lname'); ?></dt>
		<dd>
			<?php echo h($client['Client']['lname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($client['Client']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($client['Client']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($client['Client']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telephone'); ?></dt>
		<dd>
			<?php echo h($client['Client']['telephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cellphone'); ?></dt>
		<dd>
			<?php echo h($client['Client']['cellphone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($client['Client']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($client['Client']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Client'), array('action' => 'edit', $client['Client']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Suspent Client'), array('action' => 'suspend', $client['Client']['id']), null, __('Are you sure you want to change status of # %s?', $client['Client']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Leadsentlogs'), array('controller' => 'leadsentlogs', 'action' => 'index')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Campaigns'); ?></h3>
	<?php if (!empty($client['Campaign'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Client Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Start Date'); ?></th>
		<th><?php echo __('End Date'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Total Leads'); ?></th>
		<th><?php echo __('Leads Per Day'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($client['Campaign'] as $campaign): ?>
		<tr>
			<td><?php echo $campaign['id']; ?></td>
			<td><?php echo $campaign['client_id']; ?></td>
			<td><?php echo $campaign['name']; ?></td>
			<td><?php echo $campaign['start_date']; ?></td>
			<td><?php echo $campaign['end_date']; ?></td>
			<td><?php echo $campaign['status']; ?></td>
			<td><?php echo $campaign['total_leads']; ?></td>
			<td><?php echo $campaign['leads_per_day']; ?></td>
			<td><?php echo $campaign['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'campaigns', 'action' => 'view', $campaign['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'campaigns', 'action' => 'edit', $campaign['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'campaigns', 'action' => 'delete', $campaign['id']), null, __('Are you sure you want to delete # %s?', $campaign['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Campaign'), array('controller' => 'campaigns', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Leadsentlogs'); ?></h3>
	<?php if (!empty($client['Leadsentlog'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Client Id'); ?></th>
		<th><?php echo __('Campaign Id'); ?></th>
		<th><?php echo __('Lead Type'); ?></th>
		<th><?php echo __('Datesent'); ?></th>
		<th><?php echo __('LeadID'); ?></th>
		<th><?php echo __('Client Reference Id'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($client['Leadsentlog'] as $leadsentlog): ?>
		<tr>
			<td><?php echo $leadsentlog['id']; ?></td>
			<td><?php echo $leadsentlog['client_id']; ?></td>
			<td><?php echo $leadsentlog['campaign_id']; ?></td>
			<td><?php echo $leadsentlog['lead_type']; ?></td>
			<td><?php echo $leadsentlog['datesent']; ?></td>
			<td><?php echo $leadsentlog['leadID']; ?></td>
			<td><?php echo $leadsentlog['client_reference_id']; ?></td>
			<td><?php echo $leadsentlog['status']; ?></td>
			<td><?php echo $leadsentlog['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'leadsentlogs', 'action' => 'view', $leadsentlog['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'leadsentlogs', 'action' => 'edit', $leadsentlog['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'leadsentlogs', 'action' => 'delete', $leadsentlog['id']), null, __('Are you sure you want to delete # %s?', $leadsentlog['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Leadsentlog'), array('controller' => 'leadsentlogs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
