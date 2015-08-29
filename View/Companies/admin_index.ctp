<div class="companies index">
	<h2><?php echo __('Clients / Companies registered with us');?></h2>
  <br />
	<table cellpadding="0" cellspacing="0" class="listing">
	<tr>
			<th class="first"><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('company_name');?></th>
			<th><?php echo $this->Paginator->sort('Name');?></th>
			<th><?php echo $this->Paginator->sort('Surname');?></th>
			<th><?php echo $this->Paginator->sort('Telephone');?></th>
      <th><?php echo $this->Paginator->sort('Email');?></th>
      <th><?php echo $this->Paginator->sort('Province');?></th>
      <th><?php echo $this->Paginator->sort('City');?></th>
      <th><?php echo $this->Paginator->sort('Type of move');?></th>
			<th><?php echo $this->Paginator->sort('Status');?></th>
			<th class="last"><?php echo __('Actions');?></th>
	</tr>
  <?php 
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
	<?php
  $a = 0;
	foreach ($companies as $company): ?>
	<tr>
		<td style='background: <?php if($a%2 == 0) { echo '#CCFF66'; }?>;' class="first">
    <?php echo h($company['Company']['id']); ?>&nbsp;
    </td>
		<td style='background: <?php if($a%2 == 0) { echo '#CCFF66'; }?>;'>
      <?php 
      $suspend = 'Suspend';
      if($company['Company']['status'] == 'Suspended') { 
        echo "<b style='font-weight:bold;color:red'>";
        $suspend = 'Activate';
      }
       echo h($company['Company']['company_name']); 
      if($company['Company']['status'] == 'Suspended') { 
        echo "</b>";
      }  ?>     
    </td>
		<td style='background: <?php if($a%2 == 0) { echo '#CCFF66'; }?>;'>
      <?php echo h($company['Company']['c_name']); ?>&nbsp;
    </td>
		<td style='background: <?php if($a%2 == 0) { echo '#CCFF66'; }?>;'><?php echo h($company['Company']['c_surname']); ?>&nbsp;</td>
		<td style='background: <?php if($a%2 == 0) { echo '#CCFF66'; }?>;'><?php echo h($company['Company']['c_telephone']); ?>&nbsp;</td>
    <td style='background: <?php if($a%2 == 0) { echo '#CCFF66'; }?>;'><?php echo h($company['Company']['c_email']); ?>&nbsp;</td>
    <td style='background: <?php if($a%2 == 0) { echo '#CCFF66'; }?>;'><?php echo h(@$prov[$company['Company']['province']]); ?>&nbsp;</td>
    <td style='background: <?php if($a%2 == 0) { echo '#CCFF66'; }?>;'><?php echo h($company['Company']['load_type']); ?>&nbsp;</td>    
    <td style='background: <?php if($a%2 == 0) { echo '#CCFF66'; }?>;'><?php echo h($company['Company']['city']); ?>&nbsp;</td>		
    <td style='background: <?php if($a%2 == 0) { echo '#CCFF66'; }?>;'><?php echo h($company['Company']['status']); ?>&nbsp;</td>
		<td style='background: <?php if($a%2 == 0) { echo '#CCFF66'; }?>;' class="last">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $company['Company']['id'])); ?> |
      <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $company['Company']['id'])); ?> | 
      <?php echo $this->Form->postLink(__($suspend), array('action' => 'suspend', $company['Company']['id']), null, __('Are you sure you want to '.$suspend.' this client # %s?', $company['Company']['company_name'])); ?>        
		</td>
	</tr>
<?php $a++; endforeach; ?>
  <tr>
    <td colspan="11" style="background-color: #ccc;color: #ccc;">.</td>
  </tr>  
</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<br />
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
  <br />
	<ul>
		<li><?php echo $this->Html->link(__('New Company'), array('action' => 'add')); ?></li>
	</ul>
</div>
