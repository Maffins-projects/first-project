<div class="leadsentlogs form">
<?php echo $this->Form->create('Leadsentlog'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Leadsentlog'); ?></legend>
	<?php
		echo $this->Form->input('client_id');
		echo $this->Form->input('campaign_id');
		echo $this->Form->input('lead_type');
		echo $this->Form->input('datesent');
		echo $this->Form->input('leadID');
		echo $this->Form->input('client_reference_id');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Leadsentlogs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Campaigns'), array('controller' => 'campaigns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campaign'), array('controller' => 'campaigns', 'action' => 'add')); ?> </li>
	</ul>
</div>
