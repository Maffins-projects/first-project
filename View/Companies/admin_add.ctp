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
