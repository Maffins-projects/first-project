<div class="cabs form">
<?php echo $this->Form->create('Cab'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Cab'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('number_of_passengers');
		echo $this->Form->input('direction');
		echo $this->Form->input('payment_method');
		echo $this->Form->input('trailer');
		echo $this->Form->input('baby_seat');
		echo $this->Form->input('pickup_address');
		echo $this->Form->input('pickup_city');
		echo $this->Form->input('pickup_province');
		echo $this->Form->input('pickup_postal_code');
		echo $this->Form->input('pickup_datetime');
		echo $this->Form->input('to_address');
		echo $this->Form->input('to_city');
		echo $this->Form->input('to_province');
		echo $this->Form->input('to_postal_code');
		echo $this->Form->input('to_datetime');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cabs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
