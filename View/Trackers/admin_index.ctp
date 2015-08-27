<div class="trackers index">
	<h2><?php echo __('Trackers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nodeID'); ?></th>
			<th><?php echo $this->Paginator->sort('sourceID'); ?></th>
			<th><?php echo $this->Paginator->sort('http_referrer'); ?></th>
			<th><?php echo $this->Paginator->sort('machine'); ?></th>
			<th><?php echo $this->Paginator->sort('machine_footprint'); ?></th>
			<th><?php echo $this->Paginator->sort('added'); ?></th>
			<th><?php echo $this->Paginator->sort('ip'); ?></th>
			<th><?php echo $this->Paginator->sort('monthly_mileage'); ?></th>
			<th><?php echo $this->Paginator->sort('campaignID'); ?></th>
			<th><?php echo $this->Paginator->sort('referer_domain'); ?></th>
			<th><?php echo $this->Paginator->sort('lead_type'); ?></th>
			<th><?php echo $this->Paginator->sort('lead_accepted'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($trackers as $tracker): ?>
	<tr>
		<td><?php echo h($tracker['Tracker']['id']); ?>&nbsp;</td>
		<td><?php echo h($tracker['Tracker']['nodeID']); ?>&nbsp;</td>
		<td><?php echo h($tracker['Tracker']['sourceID']); ?>&nbsp;</td>
		<td><?php echo h($tracker['Tracker']['http_referrer']); ?>&nbsp;</td>
		<td><?php echo h($tracker['Tracker']['machine']); ?>&nbsp;</td>
		<td><?php echo h($tracker['Tracker']['machine_footprint']); ?>&nbsp;</td>
		<td><?php echo h($tracker['Tracker']['added']); ?>&nbsp;</td>
		<td><?php echo h($tracker['Tracker']['ip']); ?>&nbsp;</td>
		<td><?php echo h($tracker['Tracker']['monthly_mileage']); ?>&nbsp;</td>
		<td><?php echo h($tracker['Tracker']['campaignID']); ?>&nbsp;</td>
		<td><?php echo h($tracker['Tracker']['referer_domain']); ?>&nbsp;</td>
		<td><?php echo h($tracker['Tracker']['lead_type']); ?>&nbsp;</td>
		<td><?php echo h($tracker['Tracker']['lead_accepted']); ?>&nbsp;</td>
		<td><?php echo h($tracker['Tracker']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tracker['Tracker']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tracker['Tracker']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tracker['Tracker']['id']), null, __('Are you sure you want to delete # %s?', $tracker['Tracker']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Tracker'), array('action' => 'add')); ?></li>
	</ul>
</div>
