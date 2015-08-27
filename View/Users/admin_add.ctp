<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add User'); ?></legend>
	<?php
		echo $this->Form->input('fname');
		echo $this->Form->input('lname');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('cellnumber');
		echo $this->Form->input('daytimenumber');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Cabs'), array('controller' => 'cabs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cab'), array('controller' => 'cabs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Loads'), array('controller' => 'loads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Load'), array('controller' => 'loads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shuttles'), array('controller' => 'shuttles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shuttle'), array('controller' => 'shuttles', 'action' => 'add')); ?> </li>
	</ul>
</div>
