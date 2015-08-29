<div class="companies form">
<?php echo $this->Form->create('Company');?>
    <h3><?php echo __('Add Company'); ?></h3>
<table class='listing'>
  <tr>
    <td style="width: 220px;">Company name</td>
    <td style="width: 520px;"><?php echo $this->Form->input('company_name', array('label'=>false)); ?></td>
  </tr> 
  <tr>
    <td colspan="2" style="background-color: silver;"><b>Contact</b></td>
  </tr>
  <tr>
    <td style="width: 220px;">Name</td>
    <td style="width: 520px;"><?php echo $this->Form->input('c_name', array('label'=>false)); ?></td>
  </tr>  
  <tr>
    <td style="width: 220px;">Surname</td>
    <td style="width: 520px;"><?php echo $this->Form->input('c_surname', array('label'=>false)); ?></td>
  </tr>  
  <tr>
    <td style="width: 220px;">Telephone</td>
    <td style="width: 520px;"><?php echo $this->Form->input('c_telephone', array('label'=>false)); ?></td>
  </tr>  
  <tr>
    <td style="width: 220px;">Email</td>
    <td style="width: 520px;"><?php echo $this->Form->input('c_email', array('label'=>false)); ?></td>
  </tr>  
  <tr>
    <td colspan="2" style="background-color: silver;"><b>Company Address</b></td>
  </tr>  
  <tr>
  <td>Province</td>
    <td><?php 
      $options = array("0"=>'- Select -','17533'=>'Eastern Cape','17534'=>'Free State','17535'=>'Gauteng','17536'=>'KwaZulu-Natal','17537'=>'Limpopo','17538'=>'Mpumalanga','17539'=>'North West', '17540'=>'Northern Cape', '17541'=>'Western Cape');
      echo $this->Form->select('from_province', $options,  array('label'=>false,'default'=> '')) ?></td>
  </tr>
  <tr>
    <td><label for="name">City *:</label> </td>
    <td><?php echo $this->Form->input('city', array('label'=>false)); ?></td>
  </tr>  
   <tr>
    <td><label for="name">Address *:</label> </td>
    <td><?php echo $this->Form->textarea('from_address', array('label'=>false)); ?></td>
  </tr>
  <tr>
    <td><label for="name">Postal Code *:</label> </td>
    <td><?php echo $this->Form->input('from_postal_code', array('label'=>false)); ?></td>
  </tr>
  <tr>
    <td colspan="2" style="background-color: silver;"><b>Types of Loads</b></td>
  </tr>  
  <tr>
  <td>Removals types</td>
    <td><?php 
      $options = array("0"=>'- Please Select -','residential'=>'Residential Moves','commercial'=>'Commercial moves','international'=>'International Moves','res_com'=>'Residential and Commercial','all'=>'All Removals');
      echo $this->Form->select('load_type', $options,  array('label'=>false,'default'=> '0')); ?></td>
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

    <li><?php echo $this->Html->link(__('List Companies'), array('action' => 'index'));?></li>
  </ul>
</div>
