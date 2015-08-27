<div class="campaigns view">
<h2><?php echo __('Campaign'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo $this->Html->link($campaign['Client']['fname'], array('controller' => 'clients', 'action' => 'view', $campaign['Client']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Date'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['start_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Date'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['end_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total Leads'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['total_leads']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Leads Per Day'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['leads_per_day']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Campaign'), array('action' => 'edit', $campaign['Campaign']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Campaign'), array('action' => 'delete', $campaign['Campaign']['id']), null, __('Are you sure you want to delete # %s?', $campaign['Campaign']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Campaigns'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campaign'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Leadsentlogs'), array('controller' => 'leadsentlogs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Leadsentlog'), array('controller' => 'leadsentlogs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Leadsentlogs'); ?></h3>
	<?php if (!empty($campaign['Leadsentlog'])): ?>
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
	<?php foreach ($campaign['Leadsentlog'] as $leadsentlog): ?>
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
