<div class="trackers view">
<h2><?php echo __('Tracker'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tracker['Tracker']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NodeID'); ?></dt>
		<dd>
			<?php echo h($tracker['Tracker']['nodeID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SourceID'); ?></dt>
		<dd>
			<?php echo h($tracker['Tracker']['sourceID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Http Referrer'); ?></dt>
		<dd>
			<?php echo h($tracker['Tracker']['http_referrer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Machine'); ?></dt>
		<dd>
			<?php echo h($tracker['Tracker']['machine']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Machine Footprint'); ?></dt>
		<dd>
			<?php echo h($tracker['Tracker']['machine_footprint']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Added'); ?></dt>
		<dd>
			<?php echo h($tracker['Tracker']['added']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ip'); ?></dt>
		<dd>
			<?php echo h($tracker['Tracker']['ip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Monthly Mileage'); ?></dt>
		<dd>
			<?php echo h($tracker['Tracker']['monthly_mileage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CampaignID'); ?></dt>
		<dd>
			<?php echo h($tracker['Tracker']['campaignID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Referer Domain'); ?></dt>
		<dd>
			<?php echo h($tracker['Tracker']['referer_domain']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lead Type'); ?></dt>
		<dd>
			<?php echo h($tracker['Tracker']['lead_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lead Accepted'); ?></dt>
		<dd>
			<?php echo h($tracker['Tracker']['lead_accepted']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($tracker['Tracker']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tracker'), array('action' => 'edit', $tracker['Tracker']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tracker'), array('action' => 'delete', $tracker['Tracker']['id']), null, __('Are you sure you want to delete # %s?', $tracker['Tracker']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Trackers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tracker'), array('action' => 'add')); ?> </li>
	</ul>
</div>
