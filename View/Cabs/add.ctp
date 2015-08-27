<div class="Taxi cabs form">
<?php echo $this->Form->create('Taxi cab'); ?>
 <div class="step">
    Step 2 - 3
  </div>
<table>
  <tr>                  
    <td valign="top"> 
    <?php echo $this->Form->hidden('userid', array('label'=>false, 'value'=>$user_id)); ?>  
 <table>
    <tr>
      <td>
        <table class="content-table">
          <tr>
            <td colspan="2" style="text-align: center;background-color: #F2F2F2;font-weight: bold;text-align: center;">
            General details
            </td>
          </tr>  
          <tr>
            <td><label for="name"> Number of Passengers*:</label> </td>
            <td><?php echo $this->Form->input('number_of_passengers', array('label'=>false, 'type'=>'text')); ?></td>
          </tr>
          <?php $options1 = array('one' => 'One Way', 'both' => 'To and From');?> 
          <tr>
            <td><label for="name"> Direction *:</label> </td>
            <td><?php echo $this->Form->radio('direction', $options1, array('legend'=>false)); ?></td>
          </tr>          
          <tr>
            <td><label for="name"> Payment Method *:</label> </td> 
            <td><b>CASH</b></td>
          </tr>
          <?php $options = array('No' => 'No', 'Yes' => 'Yes');?> 
          <tr>
            <td><label for="name"> Do you require a trailer:</label> </td>
            <td><?php echo $this->Form->radio('trailer', $options, array('legend'=>false)); ?></td>
          </tr>            
          <tr>
            <td><label for="name"> Do you require a Baby seat:</label> </td>
            <td><?php echo $this->Form->radio('baby_seat', $options, array('legend'=>false)); ?></td>
          </tr>  
          <tr>
            <td colspan="2" style="text-align: center;background-color: #F2F2F2;font-weight: bold;text-align: center;">
            Pickup Point
            </td>
          </tr>
          <tr>
            <td><label for="name">Address *:</label> </td>
            <td><?php echo $this->Form->textarea('pickup_address', array('label'=>false)); ?></td>
          </tr> 
          <tr>
            <td><label for="name">City *:</label> </td>
            <td><?php echo $this->Form->input('pickup_city', array('label'=>false)); ?></td>
          </tr>  
          <tr>
            <td><label for="name"> Province*:</label> </td>
            <td><?php 
              $options = array("0"=>'- Select -','Eastern Cape'=>'Eastern Cape','Free State'=>'Free State','Gauteng'=>'Gauteng','KwaZulu-Natal'=>'KwaZulu-Natal','Limpopo'=>'Limpopo','Mpumalanga'=>'Mpumalanga','North West'=>'North West', 'Northern Cape'=>'Northern Cape', 'Western Cape'=>'Western Cape');
              echo $this->Form->select('pickup_province', $options,  array('label'=>false,'default'=>0)); ?></td>
          </tr>   
          <tr>
            <td><label for="name">Postal Code *:</label> </td>
            <td><?php echo $this->Form->input('pickup_postal_code', array('label'=>false)); ?></td>
          </tr>    
          <tr>
            <td><label for="name">Date :</label> </td>
            <td><?php echo $this->Form->input('pickup_datetime', array('label'=>false, 'type'=>'text', 'id'=>'cabPickupDatetime')); ?></td>
          </tr>     
          <tr>
            <td colspan="2" style="text-align: center;background-color: #F2F2F2;font-weight: bold;text-align: center;">
            Drop off point
            </td>
          </tr>     
          <tr>
            <td><label for="name">Address *:</label> </td>
            <td><?php echo $this->Form->textarea('to_address', array('label'=>false)); ?></td>
          </tr> 
          <tr>
            <td><label for="name">City *:</label> </td>
            <td><?php echo $this->Form->input('to_city', array('label'=>false)); ?></td>
          </tr>  
          <tr>
            <td><label for="name"> Province*:</label> </td>
            <td><?php 
              $options = array("0"=>'- Select -','Eastern Cape'=>'Eastern Cape','Free State'=>'Free State','Gauteng'=>'Gauteng','KwaZulu-Natal'=>'KwaZulu-Natal','Limpopo'=>'Limpopo','Mpumalanga'=>'Mpumalanga','North West'=>'North West', 'Northern Cape'=>'Northern Cape', 'Western Cape'=>'Western Cape');
              echo $this->Form->select('to_province', $options,  array('label'=>false,'default'=>0)); ?></td>
          </tr>   
          <tr>
            <td><label for="name">Postal Code *:</label> </td>
            <td><?php echo $this->Form->input('to_postal_code', array('label'=>false)); ?></td>
          </tr>    
          <tr>
            <td><label for="name">Date :</label> </td>
            <td><?php echo $this->Form->input('to_datetime', array('label'=>false, 'type'=>'text', 'id'=>'cabToDatetime')); ?></td>
          </tr>        
          <tr>
            <td colspan="2">  <?php echo $this->Form->end(__('Next')); ?></td>
          </tr>
       </table>                                                          
    </td>
    <td valign="top">
      <h2>Send me free Taxi/Cab quotes now </h2>
   <br />
Complete your details. It is important that you ensure the information supplied is correct so that Taxi cab companies can contact you quickly and easily about your requirements. Your request is obligation and cost free!
      <br />
      <br />
        <img src="/removal-leads.co.za/img/taxi.jpg" style="width:443px" alt="Removals, Taxi cab services, Taxi cab">    
    </td>
  </tr>
</table>  
</div>
