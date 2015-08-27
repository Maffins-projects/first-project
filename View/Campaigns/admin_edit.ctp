<div class="campaigns form">
<?php echo $this->Form->create('Campaign'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Campaign'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('client_id');
		echo $this->Form->input('name');
		echo $this->Form->input('start_date');
		echo $this->Form->input('end_date');
		echo $this->Form->input('status');
		echo $this->Form->input('total_leads');
		echo $this->Form->input('leads_per_day');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Campaign.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Campaign.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Campaigns'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Leadsentlogs'), array('controller' => 'leadsentlogs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Leadsentlog'), array('controller' => 'leadsentlogs', 'action' => 'add')); ?> </li>
	</ul>
</div>
