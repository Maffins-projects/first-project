<div class="shuttles view">
<h2><?php echo __('Shuttle'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($shuttle['Shuttle']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($shuttle['User']['fname'], array('controller' => 'users', 'action' => 'view', $shuttle['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number Of Passengers'); ?></dt>
		<dd>
			<?php echo h($shuttle['Shuttle']['number_of_passengers']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direction'); ?></dt>
		<dd>
			<?php echo h($shuttle['Shuttle']['direction']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment Method'); ?></dt>
		<dd>
			<?php echo h($shuttle['Shuttle']['payment_method']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trailer'); ?></dt>
		<dd>
			<?php echo h($shuttle['Shuttle']['trailer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Baby Seat'); ?></dt>
		<dd>
			<?php echo h($shuttle['Shuttle']['baby_seat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pickup Address'); ?></dt>
		<dd>
			<?php echo h($shuttle['Shuttle']['pickup_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pickup City'); ?></dt>
		<dd>
			<?php echo h($shuttle['Shuttle']['pickup_city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pickup Province'); ?></dt>
		<dd>
			<?php echo h($shuttle['Shuttle']['pickup_province']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pickup Postal Code'); ?></dt>
		<dd>
			<?php echo h($shuttle['Shuttle']['pickup_postal_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pickup Flight Number'); ?></dt>
		<dd>
			<?php echo h($shuttle['Shuttle']['pickup_flight_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pickup Datetime'); ?></dt>
		<dd>
			<?php echo h($shuttle['Shuttle']['pickup_datetime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('To Address'); ?></dt>
		<dd>
			<?php echo h($shuttle['Shuttle']['to_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('To City'); ?></dt>
		<dd>
			<?php echo h($shuttle['Shuttle']['to_city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('To Province'); ?></dt>
		<dd>
			<?php echo h($shuttle['Shuttle']['to_province']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('To Postal Code'); ?></dt>
		<dd>
			<?php echo h($shuttle['Shuttle']['to_postal_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('To Flight Number'); ?></dt>
		<dd>
			<?php echo h($shuttle['Shuttle']['to_flight_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('To Datetime'); ?></dt>
		<dd>
			<?php echo h($shuttle['Shuttle']['to_datetime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($shuttle['Shuttle']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($shuttle['Shuttle']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Shuttle'), array('action' => 'edit', $shuttle['Shuttle']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Shuttle'), array('action' => 'delete', $shuttle['Shuttle']['id']), null, __('Are you sure you want to delete # %s?', $shuttle['Shuttle']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Shuttles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shuttle'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
