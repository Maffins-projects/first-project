<div class="cabs view">
<h2><?php echo __('Cab'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cab['Cab']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cab['User']['fname'], array('controller' => 'users', 'action' => 'view', $cab['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number Of Passengers'); ?></dt>
		<dd>
			<?php echo h($cab['Cab']['number_of_passengers']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direction'); ?></dt>
		<dd>
			<?php echo h($cab['Cab']['direction']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment Method'); ?></dt>
		<dd>
			<?php echo h($cab['Cab']['payment_method']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trailer'); ?></dt>
		<dd>
			<?php echo h($cab['Cab']['trailer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Baby Seat'); ?></dt>
		<dd>
			<?php echo h($cab['Cab']['baby_seat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pickup Address'); ?></dt>
		<dd>
			<?php echo h($cab['Cab']['pickup_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pickup City'); ?></dt>
		<dd>
			<?php echo h($cab['Cab']['pickup_city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pickup Province'); ?></dt>
		<dd>
			<?php echo h($cab['Cab']['pickup_province']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pickup Postal Code'); ?></dt>
		<dd>
			<?php echo h($cab['Cab']['pickup_postal_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pickup Datetime'); ?></dt>
		<dd>
			<?php echo h($cab['Cab']['pickup_datetime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('To Address'); ?></dt>
		<dd>
			<?php echo h($cab['Cab']['to_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('To City'); ?></dt>
		<dd>
			<?php echo h($cab['Cab']['to_city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('To Province'); ?></dt>
		<dd>
			<?php echo h($cab['Cab']['to_province']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('To Postal Code'); ?></dt>
		<dd>
			<?php echo h($cab['Cab']['to_postal_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('To Datetime'); ?></dt>
		<dd>
			<?php echo h($cab['Cab']['to_datetime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($cab['Cab']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($cab['Cab']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cab'), array('action' => 'edit', $cab['Cab']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cab'), array('action' => 'delete', $cab['Cab']['id']), null, __('Are you sure you want to delete # %s?', $cab['Cab']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cabs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cab'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
