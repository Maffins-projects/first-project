<div class="admins view">
<h2><?php echo __('Admin'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($admin['Admin']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fname'); ?></dt>
		<dd>
			<?php echo h($admin['Admin']['fname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lname'); ?></dt>
		<dd>
			<?php echo h($admin['Admin']['lname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($admin['Admin']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($admin['Admin']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($admin['Admin']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cellnumber'); ?></dt>
		<dd>
			<?php echo h($admin['Admin']['cellnumber']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($admin['Admin']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($admin['Admin']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Admin'), array('action' => 'edit', $admin['Admin']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Admin'), array('action' => 'delete', $admin['Admin']['id']), null, __('Are you sure you want to delete # %s?', $admin['Admin']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Admins'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Admin'), array('action' => 'add')); ?> </li>
	</ul>
</div>
