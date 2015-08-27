<div class="leadsentlogs index">
	<h2><?php echo __('Leads log'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="listing">
	<tr>
			<th class="first"><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('client_id'); ?></th>
			<th><?php echo $this->Paginator->sort('campaign_id'); ?></th>
			<th><?php echo $this->Paginator->sort('lead_type'); ?></th>
			<th><?php echo $this->Paginator->sort('datesent'); ?></th>
			<th><?php echo $this->Paginator->sort('leadID'); ?></th>
			<th><?php echo $this->Paginator->sort('client_reference_id'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="last"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($leadsentlogs as $leadsentlog): ?>
	<tr>
		<td><?php echo h($leadsentlog['Leadsentlog']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($leadsentlog['Company']['company_name'], array('controller' => 'clients', 'action' => 'view', $leadsentlog['Company']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($leadsentlog['Campaign']['name'], array('controller' => 'campaigns', 'action' => 'view', $leadsentlog['Campaign']['id'])); ?>
		</td>
		<td><?php echo h($leadsentlog['Leadsentlog']['lead_type']); ?>&nbsp;</td>
		<td><?php echo h($leadsentlog['Leadsentlog']['datesent']); ?>&nbsp;</td>
		<td><?php echo h($leadsentlog['Leadsentlog']['leadID']); ?>&nbsp;</td>
		<td><?php echo h($leadsentlog['Leadsentlog']['client_reference_id']); ?>&nbsp;</td>
		<td><?php echo h($leadsentlog['Leadsentlog']['status']); ?>&nbsp;</td>
		<td><?php echo h($leadsentlog['Leadsentlog']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $leadsentlog['Leadsentlog']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $leadsentlog['Leadsentlog']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $leadsentlog['Leadsentlog']['id']), null, __('Are you sure you want to delete # %s?', $leadsentlog['Leadsentlog']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
  <tr>
    <td colspan="10" style="background-color: #ccc;color:#ccc">.</td>
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
<br />
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
  <br />
	<ul>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Campaigns'), array('controller' => 'campaigns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campaign'), array('controller' => 'campaigns', 'action' => 'add')); ?> </li>
	</ul>
</div>
