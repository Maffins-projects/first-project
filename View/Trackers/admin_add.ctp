<div class="trackers form">
<?php echo $this->Form->create('Tracker'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Tracker'); ?></legend>
	<?php
		echo $this->Form->input('nodeID');
		echo $this->Form->input('sourceID');
		echo $this->Form->input('http_referrer');
		echo $this->Form->input('machine');
		echo $this->Form->input('machine_footprint');
		echo $this->Form->input('added');
		echo $this->Form->input('ip');
		echo $this->Form->input('monthly_mileage');
		echo $this->Form->input('campaignID');
		echo $this->Form->input('referer_domain');
		echo $this->Form->input('lead_type');
		echo $this->Form->input('lead_accepted');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Trackers'), array('action' => 'index')); ?></li>
	</ul>
</div>
