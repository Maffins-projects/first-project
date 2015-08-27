<div class="companies view">
<h2><?php  echo __('Company');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($company['Company']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company Name'); ?></dt>
		<dd>
			<?php echo h($company['Company']['company_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('C Name'); ?></dt>
		<dd>
			<?php echo h($company['Company']['c_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('C Surname'); ?></dt>
		<dd>
			<?php echo h($company['Company']['c_surname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('C Telephone'); ?></dt>
		<dd>
			<?php echo h($company['Company']['c_telephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('C Email'); ?></dt>
		<dd>
			<?php echo h($company['Company']['c_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contacted'); ?></dt>
		<dd>
			<?php echo h($company['Company']['contacted']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datetime'); ?></dt>
		<dd>
			<?php echo h($company['Company']['datetime']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Company'), array('action' => 'edit', $company['Company']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Company'), array('action' => 'delete', $company['Company']['id']), null, __('Are you sure you want to delete # %s?', $company['Company']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('action' => 'add')); ?> </li>
	</ul>
</div>
