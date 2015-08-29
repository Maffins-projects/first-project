<div class="SaveLeads index">
<br />
	<h2><?php echo __('Leads log'); ?></h2>
<br />  
	<table cellpadding="0" cellspacing="0" class="listing">
  <tr>
      <th class="first"><?php echo _('Lead Reference'); ?></th>
      <th><?php echo _('Name'); ?></th>
      <th><?php echo _('Cellphone'); ?></th>
      <th><?php echo _('Email'); ?></th>
      <th><?php echo _('Type of Move'); ?></th>
      <th><?php echo _('From Province'); ?></th>
      <th><?php echo _('Status'); ?></th>
      <th><?php echo _('created'); ?></th>
      <th class="last"><?php echo __('Actions'); ?></th>
  </tr>
  <?php 
    $array[1] = 'Residential Move';
    $array[2] = 'Commercial Move';
    $array[3] = 'International Move';
    
    /********************************/
    $prov[17533] = "Eastern Cape";
    $prov[17534] = "Free State";
    $prov[17535] = "Gauteng";
    $prov[17536] = "KwaZulu-Natal";
    $prov[17537] = "Limpopo";
    $prov[17538] = "Mpumalanga";
    $prov[17539] = "North West";
    $prov[17540] = "Northern Cape";
    $prov[17541] = "Western Cape";   
  ?>
	<?php foreach ($leadsentlogs as $SaveLead): ?>
  <?php
  if ($SaveLead['SaveLead']['move_type'] == 3) {
     $color = '#FFCC00';
  } else if ($SaveLead['SaveLead']['move_type'] == 2) {
     $color = '#CCFFCC';
  }else {
     $color = '#6699FF';
  }
?>
	<tr>
		<td style="background-color: <?php echo $color;?>; !important"><?php echo h($SaveLead['SaveLead']['id']); ?>&nbsp;</td>
		<td style="background-color: <?php echo $color;?>; !important">
			<?php echo $this->Html->link($SaveLead['Client']['fname']." ".$SaveLead['Client']['lname'], array('controller' => 'clients', 'action' => 'view', $SaveLead['Client']['id'])); ?>
		</td>
    <td style="background-color: <?php echo $color;?>; !important">
      <?php echo $this->Html->link($SaveLead['Client']['cellphone'], array('controller' => 'Client', 'action' => 'view', $SaveLead['Client']['id'])); ?>
    </td>
		<td style="background-color: <?php echo $color;?>; !important">
			<?php echo $this->Html->link($SaveLead['Client']['email'], array('controller' => 'Client', 'action' => 'view', $SaveLead['Client']['id'])); ?>
		</td>
		<td style="background-color: <?php echo $color;?>; !important"><?php echo h(@$array[$SaveLead['SaveLead']['move_type']]); ?>&nbsp;</td>
		<td style="background-color: <?php echo $color;?>; !important"><?php echo h($prov[$SaveLead['SaveLead']['from_province']]); ?>&nbsp;</td>
    <td style="background-color: <?php echo $color;?>; !important"><?php echo h(''); ?>&nbsp;</td>
		<td style="background-color: <?php echo $color;?>; !important"><?php echo h($SaveLead['SaveLead']['created']); ?>&nbsp;</td>
		<td class="actions">
      <button class="btn btn-primary" style="width: 120px;" onclick="window.location.href='<?php echo Router::url(array('controller'=>'Leadsentlogs', 'action'=>'sendleadclients', $SaveLead['SaveLead']['id']))?>'">Send Lead</button>
		</td>
	</tr>
<?php endforeach; ?>
  <tr>
    <td colspan="10" style="background-color: #ccc;color:#ccc">.</td>
  </tr>
	</table>
	<p>
	<?php
	//echo $this->Paginator->counter(array(
//	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
//	));
	?>	</p>
	<div class="paging">
	<?php
		//echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		//echo $this->Paginator->numbers(array('separator' => ''));
		//echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<br />
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
  <br />
	<ul>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
