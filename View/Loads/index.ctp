<div class="loads index">
	<h2><?php echo __('Loads'); ?></h2>
	<table cellpadding="0" cellspacing="0">
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
			<th><?php echo $this->Paginator->sort('require_full_assembly'); ?></th>
			<th><?php echo $this->Paginator->sort('packaging_service'); ?></th>
			<th><?php echo $this->Paginator->sort('move_date'); ?></th>
			<th><?php echo $this->Paginator->sort('inventory_list'); ?></th>
			<th><?php echo $this->Paginator->sort('tips'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($loads as $load): ?>
	<tr>
		<td><?php echo h($load['Load']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($load['User']['fname'], array('controller' => 'users', 'action' => 'view', $load['User']['id'])); ?>
		</td>
		<td><?php echo h($load['Load']['from_address']); ?>&nbsp;</td>
		<td><?php echo h($load['Load']['from_province']); ?>&nbsp;</td>
		<td><?php echo h($load['Load']['from_postal_code']); ?>&nbsp;</td>
		<td><?php echo h($load['Load']['from_floor']); ?>&nbsp;</td>
		<td><?php echo h($load['Load']['from_elevator']); ?>&nbsp;</td>
		<td><?php echo h($load['Load']['from_rooms']); ?>&nbsp;</td>
		<td><?php echo h($load['Load']['to_address']); ?>&nbsp;</td>
		<td><?php echo h($load['Load']['to_province']); ?>&nbsp;</td>
		<td><?php echo h($load['Load']['to_postal_code']); ?>&nbsp;</td>
		<td><?php echo h($load['Load']['to_floor']); ?>&nbsp;</td>
		<td><?php echo h($load['Load']['to_elavator']); ?>&nbsp;</td>
		<td><?php echo h($load['Load']['to_rooms']); ?>&nbsp;</td>
		<td><?php echo h($load['Load']['require_storage']); ?>&nbsp;</td>
		<td><?php echo h($load['Load']['require_full_assembly']); ?>&nbsp;</td>
		<td><?php echo h($load['Load']['packaging_service']); ?>&nbsp;</td>
		<td><?php echo h($load['Load']['move_date']); ?>&nbsp;</td>
		<td><?php echo h($load['Load']['inventory_list']); ?>&nbsp;</td>
		<td><?php echo h($load['Load']['tips']); ?>&nbsp;</td>
		<td><?php echo h($load['Load']['modified']); ?>&nbsp;</td>
		<td><?php echo h($load['Load']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $load['Load']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $load['Load']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $load['Load']['id']), null, __('Are you sure you want to delete # %s?', $load['Load']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
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
		<li><?php echo $this->Html->link(__('New Load'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
