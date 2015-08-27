<div class="clients form">
<?php echo $this->Form->create('Client'); ?>
	<fieldset>
		<legend><?php echo __('Add Client'); ?></legend>
	<?php
		echo $this->Form->input('fname');
		echo $this->Form->input('lname');
		echo $this->Form->input('type');
		echo $this->Form->input('address');
		echo $this->Form->input('email');
		echo $this->Form->input('telephone');
		echo $this->Form->input('cellphone');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Clients'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Campaigns'), array('controller' => 'campaigns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campaign'), array('controller' => 'campaigns', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Leadsentlogs'), array('controller' => 'leadsentlogs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Leadsentlog'), array('controller' => 'leadsentlogs', 'action' => 'add')); ?> </li>
	</ul>
</div>
