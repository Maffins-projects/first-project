<div class="companies index">
  <h2><?php echo __('Leads Status per client');?></h2>
  <br />
  <table cellpadding="0" cellspacing="0" class="listing">
  <tr>
      <th class="first"><?php echo _('company_name');?></th>
      <th><?php echo _('Telephone');?></th>
      <th><?php echo _('Email');?></th>
      <th><?php echo _('Province');?></th>
      <th><?php echo _('City');?></th>
      <th><?php echo _('Type of move');?></th>
      <th><?php echo _('Leads Plan');?></th>
      <th><?php echo _('Total');?></th>
      <th><?php echo _('Daily Limit');?></th>
      <th><?php echo _('Sent');?></th>
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
  foreach ($plans as $company): ?>
  <tr>
    <td style='background: <?php if($a%2 == 0) { echo '#CCFF66'; }?>;'>
      <?php echo h($company['Company']['company_name']); ?>&nbsp;
    </td>
    <td style='background: <?php if($a%2 == 0) { echo '#CCFF66'; }?>;'>
      <?php echo h($company['Company']['c_telephone']); ?>&nbsp;
    </td>
    <td style='background: <?php if($a%2 == 0) { echo '#CCFF66'; }?>;'>
      <?php echo h($company['Company']['c_email']); ?>&nbsp;
    </td>
    <td style='background: <?php if($a%2 == 0) { echo '#CCFF66'; }?>;'>
    <?php echo h(@$prov[$company['Company']['province']]); ?>&nbsp;
    </td>
    <td style='background: <?php if($a%2 == 0) { echo '#CCFF66'; }?>;'>
      <?php echo h($company['Company']['city']); ?>&nbsp;
    </td>    
    <td style='background: <?php if($a%2 == 0) { echo '#CCFF66'; }?>;'>
      <?php echo h($company['Company']['load_type']); ?>&nbsp;
    </td>    
    <td style='background: <?php if($a%2 == 0) { echo '#CCFF66'; }?>;'>
    <?php echo h($company['Leadsplan']['leads_plan']); ?>&nbsp;
    </td>    
    <td style='background: <?php if($a%2 == 0) { echo '#CCFF66'; }?>;'>
    <?php echo h($company['Leadsplan']['total_leads_for_plan']); ?>&nbsp;
    </td>     
    <td style='background: <?php if($a%2 == 0) { echo '#CCFF66'; }?>;'>
    <?php echo h($company['Leadsplan']['total_per_day']); ?>&nbsp;
    </td>    
    <td style='background: <?php if($a%2 == 0) { echo '#CCFF66'; }?>;'>
    <?php echo h(''); ?>&nbsp;
    </td>
    <td style='background: <?php if($a%2 == 0) { echo '#CCFF66'; }?>;' class="last">
      <?php echo $this->Html->link(__('View'), array('action' => 'view', $company['Company']['id'])); ?> |
      <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $company['Company']['id'])); ?> | 
    </td>
  </tr>
<?php $a++; endforeach; ?>
  <tr>
    <td colspan="11" style="background-color: #ccc;color: #ccc;">.</td>
  </tr>  
</table>
<div class="actions">
  <h3><?php echo __('Actions'); ?></h3>
  <br />
  <ul>
    <li><?php echo $this->Html->link(__('Set New Lead'), array('action' => 'setleadsadd')); ?></li>
  </ul>
</div>
</div>
