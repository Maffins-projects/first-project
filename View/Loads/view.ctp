<div class="loads view">
<h2><?php echo __('Load'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($load['Load']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($load['User']['fname'], array('controller' => 'users', 'action' => 'view', $load['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('From Address'); ?></dt>
		<dd>
			<?php echo h($load['Load']['from_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('From Province'); ?></dt>
		<dd>
			<?php echo h($load['Load']['from_province']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('From Postal Code'); ?></dt>
		<dd>
			<?php echo h($load['Load']['from_postal_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('From Floor'); ?></dt>
		<dd>
			<?php echo h($load['Load']['from_floor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('From Elevator'); ?></dt>
		<dd>
			<?php echo h($load['Load']['from_elevator']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('From Rooms'); ?></dt>
		<dd>
			<?php echo h($load['Load']['from_rooms']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('To Address'); ?></dt>
		<dd>
			<?php echo h($load['Load']['to_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('To Province'); ?></dt>
		<dd>
			<?php echo h($load['Load']['to_province']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('To Postal Code'); ?></dt>
		<dd>
			<?php echo h($load['Load']['to_postal_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('To Floor'); ?></dt>
		<dd>
			<?php echo h($load['Load']['to_floor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('To Elavator'); ?></dt>
		<dd>
			<?php echo h($load['Load']['to_elavator']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('To Rooms'); ?></dt>
		<dd>
			<?php echo h($load['Load']['to_rooms']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Require Storage'); ?></dt>
		<dd>
			<?php echo h($load['Load']['require_storage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Require Full Assembly'); ?></dt>
		<dd>
			<?php echo h($load['Load']['require_full_assembly']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Packaging Service'); ?></dt>
		<dd>
			<?php echo h($load['Load']['packaging_service']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Move Date'); ?></dt>
		<dd>
			<?php echo h($load['Load']['move_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inventory List'); ?></dt>
		<dd>
			<?php echo h($load['Load']['inventory_list']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tips'); ?></dt>
		<dd>
			<?php echo h($load['Load']['tips']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($load['Load']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($load['Load']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Load'), array('action' => 'edit', $load['Load']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Load'), array('action' => 'delete', $load['Load']['id']), null, __('Are you sure you want to delete # %s?', $load['Load']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Loads'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Load'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
