<div class="users form">
<?php echo $this->Form->create('Admin'); ?>
 <h3>Login</h3>
 <?php echo $this->Session->flash(); ?>  
 <style> 
 	form { background-color:white; }
 </style>
 	<table style='background-color:white;width: 80%;' border="0">
		<tr>
			<td colspan=2 align="center">
     <div style="text-align: center;" id="logo"><a href="#" class="notext">bgsdfgeSMART</a></div>
       
      </td>
		</tr>
		<tr>
			<td style='font-weight:bold'>Username</td>
			<td style='font-weight:bold'><?php echo $this->Form->input('username', array('label' => false));?></td>
		</tr>
		<tr>
			<td style='font-weight:bold'>Password</td>
			<td style='font-weight:bold'><?php echo $this->Form->input('password', array('label' => false));?></td>
		</tr>
		<tr>
			<td colspan=2><?php echo $this->Form->end(__('Login')); ?></td>
		</tr>
	</table>
</div>

