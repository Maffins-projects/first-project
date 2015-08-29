<div class="leadsplans form">
<?php echo $this->Form->create('Leadsplan'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Leadsplan'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('company_id');
		echo $this->Form->input('total');
		echo $this->Form->input('leads_plan');
		echo $this->Form->input('date_from');
		echo $this->Form->input('date_to');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Leadsplan.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Leadsplan.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Leadsplans'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
