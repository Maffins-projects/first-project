<div class="saveLeads form">
<?php echo $this->Form->create('SaveLead'); ?>
	<fieldset>
		<legend><?php echo __('Edit Save Lead'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('from_address');
		echo $this->Form->input('from_province');
		echo $this->Form->input('from_postal_code');
		echo $this->Form->input('from_floor');
		echo $this->Form->input('from_elevator');
		echo $this->Form->input('from_rooms');
		echo $this->Form->input('to_address');
		echo $this->Form->input('to_province');
		echo $this->Form->input('to_postal_code');
		echo $this->Form->input('to_floor');
		echo $this->Form->input('to_elavator');
		echo $this->Form->input('to_rooms');
		echo $this->Form->input('require_storage');
		echo $this->Form->input('move_date');
		echo $this->Form->input('inventory_list');
		echo $this->Form->input('type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SaveLead.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('SaveLead.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Save Leads'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
