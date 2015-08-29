<div class="companies form">
<?php echo $this->Form->create('Leadsplan', array('controller' => 'Leadsplans', 'action' => 'add'));?>
		<h3><?php echo __('Set Leads per client'); ?></h3>
<table class='listing'>
  <tr>
    <td style="width: 220px;">Company name</td>
    <td style="width: 520px;"><?php echo $this->Form->input('company_id', array('label'=>false, 'type' => 'select', 'options' => $company)); ?></td>
  </tr> 
  <tr>
    <td colspan="2" style="background-color: silver;"><b>Set the Leads</b></td>
  </tr>
  <tr>
    <td style="width: 220px;">Leads Plan</td>
    <td style="width: 520px;">
      <?php   
        $options = array(0=>'-Please Select-', 'Monthly' => 'Monthly', 'Quaterly' => 'Quaterly', 'Daily' => 'Daily', '6months' => '6 Months', 'Yearly' => 'Yearly', 'Weekly' => 'Weekly');
        echo $this->Form->input('leads_plan', array('label'=>false, 'type' => 'select', 'options' => $options)); 
      ?>
    </td>
  </tr>  
  <tr>
    <td style="width: 220px;">Total Leads for this plan</td>
    <td style="width: 520px;"><?php echo $this->Form->input('total_leads_for_plan', array('label'=>false, 'type' => 'text')); ?></td>
  </tr>  
  <tr>
    <td style="width: 220px;">Total Per day</td>
    <td style="width: 520px;"><?php echo $this->Form->input('total_per_day', array('label'=>false, 'type' => 'text')); ?></td>
  </tr>   
  <tr>
    <td colspan="2" style="background-color: silver;"><b>Period</b></td>
  </tr>  
  <tr>
    <td><label for="name">Date From *:</label> </td>
    <td><?php echo $this->Form->input('date_from', array('label'=>false, 'class' => 'datepickerr')); ?></td>
  </tr>  
   <tr>
    <td><label for="name">Date to *:</label> </td>
    <td><?php echo $this->Form->input('date_to', array('label'=>false, 'class' => 'datepickerr')); ?></td>
  </tr>
   <tr>
    <td colspan="2">
         <?php echo $this->Form->end(__('Submit'));?>
    </td>
  </tr>   
 </table>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Leads Status'), array('action' => 'setleads'));?></li>
	</ul>
</div>
