<div class="companies form">
<?php echo $this->Form->create('Company');?>
	<fieldset>
		<legend><?php echo __('Admin Edit Company'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('company_name');
		echo $this->Form->input('c_name');
		echo $this->Form->input('c_surname');
		echo $this->Form->input('c_telephone');
		echo $this->Form->input('c_email');
		echo $this->Form->input('contacted');
		echo $this->Form->input('datetime');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Company.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Company.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('action' => 'index'));?></li>
	</ul>
</div>
