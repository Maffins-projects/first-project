<div class="campaigns form">
<?php echo $this->Form->create('Campaign'); ?>
		<h3><?php echo __('Add Campaign'); ?></h3>
<table class='listing'>
  <tr>
    <td style="width: 220px;">Client</td>
    <td style="width: 520px;"><?php echo $this->Form->select('company_id', array('label'=>false, 'options'=>$clients)); ?></td>
  </tr> 
  <tr>
    <td style="width: 220px;">Campaign Name </td>
    <td style="width: 520px;"><?php echo $this->Form->input('name', array('label'=>false)); ?></td>
  </tr> 
  <tr>
    <td style="width: 220px;">Campain Start Date</td>
    <td style="width: 520px;"><?php echo $this->Form->input('start_date', array('label'=>false)); ?></td>
  </tr> 
  <tr>
    <td style="width: 220px;">Campain End Date</td>
    <td style="width: 520px;"><?php echo $this->Form->input('end_date', array('label'=>false)); ?></td>
  </tr> 
  <tr>
    <td style="width: 220px;">status</td>
<?php $options = array('select'=>'- Select -', 'Active'=>'Active', 'Stopped'=>'Stopped', 'Paused'=>'Paused')?>    
    <td style="width: 520px;"><?php echo $this->Form->input('status', array('label'=>false, 'type'=>'select', 'options'=>$options)); ?></td>
  </tr>
  <tr>
  <tr>
    <td style="width: 220px;">Campaign Type</td>
<?php $options = array('select'=>'- Select -', 'Loads'=>'Loads', 'Shuttle'=>'Shuttle', 'Cab'=>'Cab')?>    
    <td style="width: 520px;"><?php echo $this->Form->input('campaign_type', array('label'=>false, 'type'=>'select', 'options'=>$options)); ?></td>
  </tr>
  <tr>
    <td style="width: 220px;">Total Campaign Leads</td>
    <td style="width: 520px;"><?php echo $this->Form->input('total_leads', array('label'=>false)); ?></td>
  </tr>
  <tr>
    <td style="width: 220px;">Leads per day</td>
    <td style="width: 520px;"><?php echo $this->Form->input('leads_per_day', array('label'=>false)); ?></td>
  </tr>   
  <tr>   
    <td colspan="2"><?php echo $this->Form->end(__('Submit')); ?></td>
  </tr> 
 </table>
</div>
<br style="clear: both;" />
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Campaigns'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Leadsentlogs'), array('controller' => 'leadsentlogs', 'action' => 'index')); ?> </li>
	</ul>
</div>
