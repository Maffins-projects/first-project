<div class="loads form">
<?php echo $this->Form->create('Load'); ?>
  
<div class="step">
    Step 2 - 3
  </div>
  <table>
    <tr>
      <td>
    <?php //echo $this->Form->hidden('userid', array('label'=>false, 'value'=>$user_id)); ?>  
      
        <div class="users form">
        <table class="content-table">
          <tr>
            <td colspan="2" style="text-align: center;background-color: #F2F2F2;font-weight: bold;text-align: center;">
            Moving from:
            </td>
          </tr>
          <tr>
            <td><label for="name"> Province*:</label> </td>
            <td><?php 
              $options = array("0"=>'- Select -','Eastern Cape'=>'Eastern Cape','Free State'=>'Free State','Gauteng'=>'Gauteng','KwaZulu-Natal'=>'KwaZulu-Natal','Limpopo'=>'Limpopo','Mpumalanga'=>'Mpumalanga','North West'=>'North West', 'Northern Cape'=>'Northern Cape', 'Western Cape'=>'Western Cape');
              echo $this->Form->select('from_province', $options,  array('label'=>false,'default'=>0)); ?></td>
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
            <td><label for="name">Floor number *:</label> </td>
            <td><?php echo $this->Form->input('from_floor', array('label'=>false)); ?></td>
          </tr>                        
          <?php $options1 = array('No' => 'No', 'Yes' => 'Yes');?> 
          <tr>
            <td><label for="name">Elevator Available *:</label> </td>
            <td>
            <?php echo $this->Form->radio('from_elevator', $options1, array('legend'=>false)); ?>
            </td>
          </tr>
          <tr>
            <td><label for="name">How many rooms *:</label> </td>
            <td><?php echo $this->Form->input('from_rooms', array('label'=>false)); ?></td>
          </tr>
          <tr>
            <td colspan="2" style="text-align: center;background-color: #F2F2F2;font-weight: bold;text-align: center;">
            Moving to:
            </td>
          </tr>          
           <tr>
            <td><label for="name"> Province*:</label> </td>
            <td><?php 
              echo $this->Form->select('to_province', $options,  array('label'=>false,'default'=>0)); ?></td>
          </tr>
           <tr>
            <td><label for="name">Address *:</label> </td>
            <td><?php echo $this->Form->textarea('to_address', array('label'=>false)); ?></td>
          </tr>
          <tr>
            <td><label for="name">Postal Code *:</label> </td>
            <td><?php echo $this->Form->input('to_postal_code', array('label'=>false)); ?></td>
          </tr>
          <tr>
            <td><label for="name">Floor number *:</label> </td>
            <td><?php echo $this->Form->input('to_floor', array('label'=>false)); ?></td>
          </tr>
          <tr>
            <td><label for="name">Elevator Available *:</label> </td>
            <td>
            <?php echo $this->Form->radio('to_elevator', $options1, array('legend'=>false)); ?>
            </td>
          </tr>
          <tr>
            <td><label for="name">How many rooms *:</label> </td>
            <td><?php echo $this->Form->input('to_rooms', array('label'=>false)); ?></td>
          </tr>   
          <tr>
            <td colspan="2" style="text-align: center;background-color: #F2F2F2;font-weight: bold;text-align: center;">
            Additional Information:
            </td>
          </tr>            
          <tr>
            <td><label for="name">I will need storage *:</label> </td>
            <?php $options = array('No' => 'No', 'Yes' => 'Yes');?>
            <td><?php echo $this->Form->radio('require_storage', $options, array('legend'=>false)); ?></td>
          </tr>
          <tr>
            <td><label for="name">I require full assembly *:</label> </td>
            <td><?php echo $this->Form->radio('require_full_assembly', $options, array('legend'=>false)); ?></td>
          </tr> 
          <tr>
            <td><label for="name">I require packaging *:</label> </td>
            <td><?php echo $this->Form->radio('packaging_service', $options, array('legend'=>false)); ?></td>
          </tr> 
          <tr>
            <td><label for="name">Moving date *:</label> </td>
            <td><?php echo $this->Form->input('move_date', array('label'=>false, 'type'=>'text')); ?></td>
          </tr>  
          <tr>
            <td><label for="name">Please state everything that is to be moved and ansure you itemise everything *:</label> </td>
            <td><?php echo $this->Form->textarea('inventory_list', array('label'=>false)); ?></td>
          </tr>       
          <?php //echo $this->Form->hidden('user_id', array('label'=>false, 'value'=>$user_id)); ?>           
          <tr>
            <td colspan="2">  <?php echo $this->Form->end(__('Next')); ?></td>
          </tr>
        </table>
        </div>
      </td>
      <td> 
      <h2>Send me free removal quotes now </h2>
   <br />
Complete your details. It is important that you ensure the information supplied is correct so that companies can contact you quickly and easily about your requirements. Your request is obligation and cost free!
        <img src="/removal-leads.co.za/img/truck.png" alt="Removals, shuttle services, cab">
      </td>
    </tr>
  </table>



</div>

