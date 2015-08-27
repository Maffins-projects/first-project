<div class="saveLeads view">
<h2><?php echo __('Save Lead'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($saveLead['SaveLead']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($saveLead['User']['fname'], array('controller' => 'users', 'action' => 'view', $saveLead['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('From Address'); ?></dt>
		<dd>
			<?php echo h($saveLead['SaveLead']['from_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('From Province'); ?></dt>
		<dd>
			<?php echo h($saveLead['SaveLead']['from_province']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('From Postal Code'); ?></dt>
		<dd>
			<?php echo h($saveLead['SaveLead']['from_postal_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('From Floor'); ?></dt>
		<dd>
			<?php echo h($saveLead['SaveLead']['from_floor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('From Elevator'); ?></dt>
		<dd>
			<?php echo h($saveLead['SaveLead']['from_elevator']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('From Rooms'); ?></dt>
		<dd>
			<?php echo h($saveLead['SaveLead']['from_rooms']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('To Address'); ?></dt>
		<dd>
			<?php echo h($saveLead['SaveLead']['to_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('To Province'); ?></dt>
		<dd>
			<?php echo h($saveLead['SaveLead']['to_province']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('To Postal Code'); ?></dt>
		<dd>
			<?php echo h($saveLead['SaveLead']['to_postal_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('To Floor'); ?></dt>
		<dd>
			<?php echo h($saveLead['SaveLead']['to_floor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('To Elavator'); ?></dt>
		<dd>
			<?php echo h($saveLead['SaveLead']['to_elavator']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('To Rooms'); ?></dt>
		<dd>
			<?php echo h($saveLead['SaveLead']['to_rooms']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Require Storage'); ?></dt>
		<dd>
			<?php echo h($saveLead['SaveLead']['require_storage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Move Date'); ?></dt>
		<dd>
			<?php echo h($saveLead['SaveLead']['move_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inventory List'); ?></dt>
		<dd>
			<?php echo h($saveLead['SaveLead']['inventory_list']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($saveLead['SaveLead']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($saveLead['SaveLead']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Save Lead'), array('action' => 'edit', $saveLead['SaveLead']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Save Lead'), array('action' => 'delete', $saveLead['SaveLead']['id']), array(), __('Are you sure you want to delete # %s?', $saveLead['SaveLead']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Save Leads'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Save Lead'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
