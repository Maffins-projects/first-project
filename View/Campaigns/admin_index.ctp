<div class="campaigns index">
	<h2><?php echo __('Campaigns'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="listing">
	<tr>
			<th class="first"><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('Company_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('start_date'); ?></th>
      <th><?php echo $this->Paginator->sort('end_date'); ?></th>
			<th><?php echo $this->Paginator->sort('Campaign Type'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('total_leads'); ?></th>
			<th><?php echo $this->Paginator->sort('leads_per_day'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="last"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($campaigns as $campaign): ?>
	<tr>
		<td><?php echo h($campaign['Campaign']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($campaign['Company']['company_name'], array('controller' => 'Companys', 'action' => 'view', $campaign['Company']['id'])); ?>
		</td>
		<td><?php echo h($campaign['Campaign']['name']); ?>&nbsp;</td>
		<td><?php echo h($campaign['Campaign']['start_date']); ?>&nbsp;</td>
    <td><?php echo h($campaign['Campaign']['end_date']); ?>&nbsp;</td>
		<td><?php echo h($campaign['Campaign']['campaign_type']); ?>&nbsp;</td>
		<td><?php echo h($campaign['Campaign']['status']); ?>&nbsp;</td>
		<td><?php echo h($campaign['Campaign']['total_leads']); ?>&nbsp;</td>
		<td><?php echo h($campaign['Campaign']['leads_per_day']); ?>&nbsp;</td>
		<td><?php echo h($campaign['Campaign']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $campaign['Campaign']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $campaign['Campaign']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $campaign['Campaign']['id']), null, __('Are you sure you want to delete # %s?', $campaign['Campaign']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
  <tr>
    <td colspan="11" style="background-color: #ccc;color:#ccc">.</td>
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
	<ul>
		<li><?php echo $this->Html->link(__('New Campaign'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Companys'), array('controller' => 'Companys', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'Companys', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Leadsentlogs'), array('controller' => 'leadsentlogs', 'action' => 'index')); ?> </li>
	</ul>
</div>
