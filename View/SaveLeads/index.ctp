<div class="saveLeads index">
	<h2><?php echo __('Save Leads'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('from_address'); ?></th>
			<th><?php echo $this->Paginator->sort('from_province'); ?></th>
			<th><?php echo $this->Paginator->sort('from_postal_code'); ?></th>
			<th><?php echo $this->Paginator->sort('from_floor'); ?></th>
			<th><?php echo $this->Paginator->sort('from_elevator'); ?></th>
			<th><?php echo $this->Paginator->sort('from_rooms'); ?></th>
			<th><?php echo $this->Paginator->sort('to_address'); ?></th>
			<th><?php echo $this->Paginator->sort('to_province'); ?></th>
			<th><?php echo $this->Paginator->sort('to_postal_code'); ?></th>
			<th><?php echo $this->Paginator->sort('to_floor'); ?></th>
			<th><?php echo $this->Paginator->sort('to_elavator'); ?></th>
			<th><?php echo $this->Paginator->sort('to_rooms'); ?></th>
			<th><?php echo $this->Paginator->sort('require_storage'); ?></th>
			<th><?php echo $this->Paginator->sort('move_date'); ?></th>
			<th><?php echo $this->Paginator->sort('inventory_list'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($saveLeads as $saveLead): ?>
	<tr>
		<td><?php echo h($saveLead['SaveLead']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($saveLead['User']['fname'], array('controller' => 'users', 'action' => 'view', $saveLead['User']['id'])); ?>
		</td>
		<td><?php echo h($saveLead['SaveLead']['from_address']); ?>&nbsp;</td>
		<td><?php echo h($saveLead['SaveLead']['from_province']); ?>&nbsp;</td>
		<td><?php echo h($saveLead['SaveLead']['from_postal_code']); ?>&nbsp;</td>
		<td><?php echo h($saveLead['SaveLead']['from_floor']); ?>&nbsp;</td>
		<td><?php echo h($saveLead['SaveLead']['from_elevator']); ?>&nbsp;</td>
		<td><?php echo h($saveLead['SaveLead']['from_rooms']); ?>&nbsp;</td>
		<td><?php echo h($saveLead['SaveLead']['to_address']); ?>&nbsp;</td>
		<td><?php echo h($saveLead['SaveLead']['to_province']); ?>&nbsp;</td>
		<td><?php echo h($saveLead['SaveLead']['to_postal_code']); ?>&nbsp;</td>
		<td><?php echo h($saveLead['SaveLead']['to_floor']); ?>&nbsp;</td>
		<td><?php echo h($saveLead['SaveLead']['to_elavator']); ?>&nbsp;</td>
		<td><?php echo h($saveLead['SaveLead']['to_rooms']); ?>&nbsp;</td>
		<td><?php echo h($saveLead['SaveLead']['require_storage']); ?>&nbsp;</td>
		<td><?php echo h($saveLead['SaveLead']['move_date']); ?>&nbsp;</td>
		<td><?php echo h($saveLead['SaveLead']['inventory_list']); ?>&nbsp;</td>
		<td><?php echo h($saveLead['SaveLead']['type']); ?>&nbsp;</td>
		<td><?php echo h($saveLead['SaveLead']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $saveLead['SaveLead']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $saveLead['SaveLead']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $saveLead['SaveLead']['id']), array(), __('Are you sure you want to delete # %s?', $saveLead['SaveLead']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Save Lead'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
