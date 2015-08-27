<div class="loads index">
	<h2><?php echo __('Loads'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="listing">
	<tr>
			<th class="first"><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('from_address'); ?></th>
			<th><?php echo $this->Paginator->sort('from_floor'); ?></th>
			<th><?php echo $this->Paginator->sort('from_elevator'); ?></th>
			<th><?php echo $this->Paginator->sort('from_rooms'); ?></th>
			<th><?php echo $this->Paginator->sort('to_address'); ?></th>
			<th><?php echo $this->Paginator->sort('to_floor'); ?></th>
			<th><?php echo $this->Paginator->sort('to_elavator'); ?></th>
			<th><?php echo $this->Paginator->sort('to_rooms'); ?></th>
			<th><?php echo $this->Paginator->sort('Move date'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="last"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($loads as $load): ?>
	<tr>
		<td><?php echo h($load['Load']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($load['User']['fname'], array('controller' => 'users', 'action' => 'view', $load['User']['id'])); ?>
		</td>
		<td><?php echo h($load['Load']['from_address']); ?>&nbsp;</td>
		<td><?php echo h($load['Load']['from_floor']); ?>&nbsp;</td>
		<td><?php echo h($load['Load']['from_elevator']); ?>&nbsp;</td>
		<td><?php echo h($load['Load']['from_rooms']); ?>&nbsp;</td>
		<td><?php echo h($load['Load']['to_address']); ?>&nbsp;</td>
		<td><?php echo h($load['Load']['to_floor']); ?>&nbsp;</td>
		<td><?php echo h($load['Load']['to_elavator']); ?>&nbsp;</td>
		<td><?php echo h($load['Load']['to_rooms']); ?>&nbsp;</td>
		<td><?php echo h($load['Load']['move_date']); ?>&nbsp;</td>
		<td><?php echo h($load['Load']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $load['Load']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $load['Load']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $load['Load']['id']), null, __('Are you sure you want to delete # %s?', $load['Load']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
  <tr>
    <td colspan="17" style="background-color: #ccc;color:#ccc">.</td>
  </tr> 
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
