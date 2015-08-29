<div class="leadsplans index">
	<h2><?php echo __('Leadsplans'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('company_id'); ?></th>
			<th><?php echo $this->Paginator->sort('total'); ?></th>
			<th><?php echo $this->Paginator->sort('leads_plan'); ?></th>
			<th><?php echo $this->Paginator->sort('date_from'); ?></th>
			<th><?php echo $this->Paginator->sort('date_to'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($leadsplans as $leadsplan): ?>
	<tr>
		<td><?php echo h($leadsplan['Leadsplan']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($leadsplan['Company']['company_name'], array('controller' => 'companies', 'action' => 'view', $leadsplan['Company']['id'])); ?>
		</td>
		<td><?php echo h($leadsplan['Leadsplan']['total']); ?>&nbsp;</td>
		<td><?php echo h($leadsplan['Leadsplan']['leads_plan']); ?>&nbsp;</td>
		<td><?php echo h($leadsplan['Leadsplan']['date_from']); ?>&nbsp;</td>
		<td><?php echo h($leadsplan['Leadsplan']['date_to']); ?>&nbsp;</td>
		<td><?php echo h($leadsplan['Leadsplan']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $leadsplan['Leadsplan']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $leadsplan['Leadsplan']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $leadsplan['Leadsplan']['id']), array(), __('Are you sure you want to delete # %s?', $leadsplan['Leadsplan']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Leadsplan'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
