<div class="leadsentlogs view">
<h2><?php echo __('Leadsentlog'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($leadsentlog['Leadsentlog']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo $this->Html->link($leadsentlog['Client']['fname'], array('controller' => 'clients', 'action' => 'view', $leadsentlog['Client']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Campaign'); ?></dt>
		<dd>
			<?php echo $this->Html->link($leadsentlog['Campaign']['name'], array('controller' => 'campaigns', 'action' => 'view', $leadsentlog['Campaign']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lead Type'); ?></dt>
		<dd>
			<?php echo h($leadsentlog['Leadsentlog']['lead_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datesent'); ?></dt>
		<dd>
			<?php echo h($leadsentlog['Leadsentlog']['datesent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LeadID'); ?></dt>
		<dd>
			<?php echo h($leadsentlog['Leadsentlog']['leadID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client Reference Id'); ?></dt>
		<dd>
			<?php echo h($leadsentlog['Leadsentlog']['client_reference_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($leadsentlog['Leadsentlog']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($leadsentlog['Leadsentlog']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Leadsentlog'), array('action' => 'edit', $leadsentlog['Leadsentlog']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Leadsentlog'), array('action' => 'delete', $leadsentlog['Leadsentlog']['id']), null, __('Are you sure you want to delete # %s?', $leadsentlog['Leadsentlog']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Leadsentlogs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Leadsentlog'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Campaigns'), array('controller' => 'campaigns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campaign'), array('controller' => 'campaigns', 'action' => 'add')); ?> </li>
	</ul>
</div>
