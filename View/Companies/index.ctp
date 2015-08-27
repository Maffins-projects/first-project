<div class="companies index">
	<h2><?php echo __('Companies');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('company_name');?></th>
			<th><?php echo $this->Paginator->sort('c_name');?></th>
			<th><?php echo $this->Paginator->sort('c_surname');?></th>
			<th><?php echo $this->Paginator->sort('c_telephone');?></th>
			<th><?php echo $this->Paginator->sort('c_email');?></th>
			<th><?php echo $this->Paginator->sort('contacted');?></th>
			<th><?php echo $this->Paginator->sort('datetime');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($companies as $company): ?>
	<tr>
		<td><?php echo h($company['Company']['id']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['company_name']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['c_name']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['c_surname']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['c_telephone']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['c_email']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['contacted']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['datetime']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $company['Company']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $company['Company']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $company['Company']['id']), null, __('Are you sure you want to delete # %s?', $company['Company']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Company'), array('action' => 'add')); ?></li>
	</ul>
</div>
