<div class="companies form">
<?php echo $this->Form->create('Company', array('class'=>"form-horizontala"));?>
    <h2><span class="label label-info">Get your company registered</span></h2>
<table>
  <tr>                  
    <td valign="top" style="border: 0;">   
 <table>
    <tr>
      <td>
        <table class="content-table">
          <tr>
            <td colspan="2" style="text-align: center;background-color: #F2F2F2;font-weight: bold;text-align: center;">
            <h2>Contact form</h2>
            <p>Please complete the contact form below and we will contact you as soon as possible to get you started.</p>
            </td>
          </tr>  
          <tr>
            <td><label for="name"> Company Name*:</label> </td>
            <td><?php echo $this->Form->input('company_name', array('label'=>false, 'type'=>'text')); ?></td>
          </tr>
          <tr>
            <td colspan="2" style="text-align: center;background-color: #F2F2F2;font-weight: bold;text-align: center;">
Contact Person
            </td>
          </tr>    
          <tr>
            <td><label for="name"> Name *:</label> </td>
            <td><?php echo $this->Form->input('c_name', array('label'=>false, 'type'=>'text')); ?></td>
          </tr>      
          <tr>
            <td><label for="name"> Surname *:</label> </td>
            <td><?php echo $this->Form->input('c_surname', array('label'=>false, 'type'=>'text')); ?></td>
          </tr>       
          <tr>
            <td><label for="name"> Telephone *:</label> </td>
            <td><?php echo $this->Form->input('c_telephone', array('label'=>false, 'type'=>'text')); ?></td>
          </tr>        
          <tr>
            <td><label for="name"> Email *:</label> </td>
            <td><?php echo $this->Form->input('c_email', array('label'=>false, 'type'=>'text')); ?></td>
          </tr>                  
          <tr>
            <td colspan="2">  <?php echo $this->Form->submit(__('Get Me Listed'), array('class'=>'btn btn-primary')); ?></td>
          </tr>
       </table>                                                          
    </td>
    <td valign="top" >
<h2>Get customers fast and easy</h2>
<br />
<p>Quote requests go directly to your mailbox from customers.
   </p>   
   <br />
   <ul id="homeul">
    <li>No set up costs</li>
    <li>No cancellation period</li>
    <li>You decide how many requests you want</li>
    <li>Quotes go directly to your mailbox/System</li>
   </ul>
   <div  style="width: 450px;color: white;">  .
   </div>
   </td>
  </tr>
</table> 

</div>
