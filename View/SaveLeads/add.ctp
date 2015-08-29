<div class="saveLeads form">
<?php echo $this->Form->create('SaveLead'); ?>

  <table style="width: 75%;">
    <tr>
      <td> 
       <?php echo $this->Form->hidden('savelead_id', array('label'=>false, 'type'=>'text', 'value'=>$id)); ?>  
        <div class="users form">
        <table class="content-table" >
         <tr>
           <td colspan="2" style="background-color: #F2F2F2;font-weight: bold;">
             <h4>Type of move:</h4>
            </td>
         </tr>
         <tr>
          <td colspan="2" style="">
          <input type="hidden" value="" id="SaveLeadMoveType_" name="data[SaveLead][move_type]">
            <table>
              <tr>
                <td><input type="radio" value="1" <?php if ($which == 1) {?> checked=checked <?php }?> id="SaveLeadMoveType1" name="data[SaveLead][move_type]"><label for="SaveLeadMoveType1"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Residential</label></td>
                <td><input type="radio" value="2" <?php if ($which == 2) {?> checked=checked <?php }?> id="SaveLeadMoveType2" name="data[SaveLead][move_type]"><label for="SaveLeadMoveType2"><span class="glyphicon glyphicon-tower" aria-hidden="true"></span> Commercial</label></td>
              </tr>
            </table>                          
          </td>
         </tr>
          <tr>
            <td colspan="2" style="background-color: #F2F2F2;font-weight: bold;">
             <h4>Moving from (Old place):</h4>
            </td>
          </tr>
          <tr>
            <td><label for="name"> Province*:</label> </td>
            <td><?php 
              $options = array("0"=>'- Select -','17533'=>'Eastern Cape','17534'=>'Free State','17535'=>'Gauteng','17536'=>'KwaZulu-Natal','17537'=>'Limpopo','17538'=>'Mpumalanga','17539'=>'North West', '17540'=>'Northern Cape', '17541'=>'Western Cape');
              echo $this->Form->select('from_province', $options,  array('label'=>false,'default'=> $prov[0]['SaveLead']['from_province'])); ?></td>
          </tr>
           <tr>
            <td><label for="name">City *:</label> </td>
            <td><?php echo $this->Form->input('from_city', array('label'=>false)); ?></td>
          </tr>          
           <tr>
            <td><label for="name">Address *:</label> </td>
            <td><?php echo $this->Form->textarea('from_address', array('label'=>false)); ?></td>
          </tr>
          <tr>
            <td><label for="name">Postal Code *:</label> </td>
            <td><?php echo $this->Form->input('from_postal_code', array('label'=>false, 'type' => 'text')); ?></td>
          </tr>
          <tr>
            <td><label for="name">Floor number *:</label> </td>
            <td><?php echo $this->Form->input('from_floor', array('label'=>false, 'type' => 'text')); ?></td>
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
            <td><?php echo $this->Form->input('from_rooms', array('label'=>false, 'type' => 'text')); ?></td>
          </tr>
          <tr>
            <td colspan="2" style="background-color: #F2F2F2;font-weight: bold;">
            <h4>Moving to (New Place):</h4>
            </td>
          </tr>          
           <tr>
            <td><label for="name"> Province*:</label> </td>
            <td><?php 
              echo $this->Form->select('to_province', $options,  array('label'=>false,'default'=>0,'default'=> $prov[0]['SaveLead']['to_province'])); ?></td>
          </tr>
           <tr>
            <td><label for="name">City *:</label> </td>
            <td><?php echo $this->Form->input('to_city', array('label'=>false)); ?></td>
          </tr>
           <tr>
            <td><label for="name">Address *:</label> </td>
            <td><?php echo $this->Form->textarea('to_address', array('label'=>false)); ?></td>
          </tr>
          <tr>
            <td><label for="name">Postal Code *:</label> </td>
            <td><?php echo $this->Form->input('to_postal_code', array('label'=>false, 'type' => 'text')); ?></td>
          </tr>
          <tr>
            <td><label for="name">Floor number *:</label> </td>
            <td><?php echo $this->Form->input('to_floor', array('label'=>false, 'type' => 'text')); ?></td>
          </tr>
          <tr>
            <td><label for="name">Elevator Available *:</label> </td>
            <td>
            <?php echo $this->Form->radio('to_elevator', $options1, array('legend'=>false, 'type' => 'text')); ?>
            </td>
          </tr>
          <tr>
            <td><label for="name">How many rooms *:</label> </td>
            <td><?php echo $this->Form->input('to_rooms', array('label'=>false, 'type' => 'text')); ?></td>
          </tr>   
          <tr>
            <td colspan="2" style="background-color: #F2F2F2;font-weight: bold;">
            <h4>Additional Information: </h4>
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
            <td><?php echo $this->Form->input('move_date', array('label'=>false, 'type'=>'text', 'class' => 'datepicker')); ?></td>
          </tr>  
          <tr style="">
            <td><label for="name">Please state everything that is to be moved and ansure you itemise everything *:</label> </td>
            <td><?php echo $this->Form->textarea('inventory_list', array('label'=>false, 'required' => false)); ?></td>
          </tr>
          <tr>
            <td colspan="2" style="background-color: #F2F2F2;font-weight: bold;">
            <h4>About you: </h4>
            </td>
          </tr> 
          <tr>
            <td><label for="name">First name *:</label> </td>
            <td><?php echo $this->Form->input('fname', array('label'=>false, 'type'=>'text', 'required' => 'required')); ?></td>
          </tr>            <tr>
            <td><label for="name">Last name *:</label> </td>
            <td><?php echo $this->Form->input('lname', array('label'=>false, 'type'=>'text', 'required' => 'required')); ?></td>
          </tr>            <tr>
            <td><label for="name">Best contact number *:</label> </td>
            <td><?php echo $this->Form->input('cellphone', array('label'=>false, 'type'=>'text', 'required' => 'required')); ?></td>
          </tr>            <tr>
            <td><label for="name">Email address *:</label> </td>
            <td><?php echo $this->Form->input('email', array('label'=>false, 'type'=>'text', 'required' => 'required')); ?></td>
          </tr>                             
          <tr>
            <td colspan="2"> <?php echo $this->Form->submit(__('Next'), array('class'=>'btn btn-primary')); ?></td>
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

