<div class="cabs index">
	<h2><?php echo __('Cabs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('number_of_passengers'); ?></th>
			<th><?php echo $this->Paginator->sort('direction'); ?></th>
			<th><?php echo $this->Paginator->sort('payment_method'); ?></th>
			<th><?php echo $this->Paginator->sort('trailer'); ?></th>
			<th><?php echo $this->Paginator->sort('baby_seat'); ?></th>
			<th><?php echo $this->Paginator->sort('pickup_address'); ?></th>
			<th><?php echo $this->Paginator->sort('pickup_city'); ?></th>
			<th><?php echo $this->Paginator->sort('pickup_province'); ?></th>
			<th><?php echo $this->Paginator->sort('pickup_postal_code'); ?></th>
			<th><?php echo $this->Paginator->sort('pickup_datetime'); ?></th>
			<th><?php echo $this->Paginator->sort('to_address'); ?></th>
			<th><?php echo $this->Paginator->sort('to_city'); ?></th>
			<th><?php echo $this->Paginator->sort('to_province'); ?></th>
			<th><?php echo $this->Paginator->sort('to_postal_code'); ?></th>
			<th><?php echo $this->Paginator->sort('to_datetime'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cabs as $cab): ?>
	<tr>
		<td><?php echo h($cab['Cab']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cab['User']['fname'], array('controller' => 'users', 'action' => 'view', $cab['User']['id'])); ?>
		</td>
		<td><?php echo h($cab['Cab']['number_of_passengers']); ?>&nbsp;</td>
		<td><?php echo h($cab['Cab']['direction']); ?>&nbsp;</td>
		<td><?php echo h($cab['Cab']['payment_method']); ?>&nbsp;</td>
		<td><?php echo h($cab['Cab']['trailer']); ?>&nbsp;</td>
		<td><?php echo h($cab['Cab']['baby_seat']); ?>&nbsp;</td>
		<td><?php echo h($cab['Cab']['pickup_address']); ?>&nbsp;</td>
		<td><?php echo h($cab['Cab']['pickup_city']); ?>&nbsp;</td>
		<td><?php echo h($cab['Cab']['pickup_province']); ?>&nbsp;</td>
		<td><?php echo h($cab['Cab']['pickup_postal_code']); ?>&nbsp;</td>
		<td><?php echo h($cab['Cab']['pickup_datetime']); ?>&nbsp;</td>
		<td><?php echo h($cab['Cab']['to_address']); ?>&nbsp;</td>
		<td><?php echo h($cab['Cab']['to_city']); ?>&nbsp;</td>
		<td><?php echo h($cab['Cab']['to_province']); ?>&nbsp;</td>
		<td><?php echo h($cab['Cab']['to_postal_code']); ?>&nbsp;</td>
		<td><?php echo h($cab['Cab']['to_datetime']); ?>&nbsp;</td>
		<td><?php echo h($cab['Cab']['modified']); ?>&nbsp;</td>
		<td><?php echo h($cab['Cab']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cab['Cab']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cab['Cab']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cab['Cab']['id']), null, __('Are you sure you want to delete # %s?', $cab['Cab']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Cab'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
