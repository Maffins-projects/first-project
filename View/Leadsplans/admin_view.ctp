<div class="leadsplans view">
<h2><?php echo __('Leadsplan'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($leadsplan['Leadsplan']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($leadsplan['Company']['company_name'], array('controller' => 'companies', 'action' => 'view', $leadsplan['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total'); ?></dt>
		<dd>
			<?php echo h($leadsplan['Leadsplan']['total']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Leads Plan'); ?></dt>
		<dd>
			<?php echo h($leadsplan['Leadsplan']['leads_plan']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date From'); ?></dt>
		<dd>
			<?php echo h($leadsplan['Leadsplan']['date_from']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date To'); ?></dt>
		<dd>
			<?php echo h($leadsplan['Leadsplan']['date_to']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($leadsplan['Leadsplan']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Leadsplan'), array('action' => 'edit', $leadsplan['Leadsplan']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Leadsplan'), array('action' => 'delete', $leadsplan['Leadsplan']['id']), array(), __('Are you sure you want to delete # %s?', $leadsplan['Leadsplan']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Leadsplans'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Leadsplan'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
