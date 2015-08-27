<div class="companies index">
	<h2><?php echo __('Clients');?></h2>
  <br />
	<table cellpadding="0" cellspacing="0" class="listing">
	<tr>
			<th class="first"><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('company_name');?></th>
			<th><?php echo $this->Paginator->sort('Name');?></th>
			<th><?php echo $this->Paginator->sort('Surname');?></th>
			<th><?php echo $this->Paginator->sort('Telephone');?></th>
			<th><?php echo $this->Paginator->sort('Email');?></th>
			<th class="last"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($companies as $company): ?>
	<tr>
		<td class="first"><?php echo h($company['Company']['id']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['company_name']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['c_name']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['c_surname']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['c_telephone']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['c_email']); ?>&nbsp;</td>
		<td class="last">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $company['Company']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $company['Company']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $company['Company']['id']), null, __('Are you sure you want to delete # %s?', $company['Company']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
  <tr>
    <td colspan="8" style="background-color: #ccc;color: #ccc;">.</td>
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
		<li><?php echo $this->Html->link(__('New Company'), array('action' => 'add')); ?></li>
	</ul>
</div>
