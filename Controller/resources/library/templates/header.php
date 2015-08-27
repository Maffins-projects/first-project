<div> 
<table style="width: 100%;" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<td width="" align="left" valign="middle" style="width: 100px;"><img src="img/logo.png" border="0" /></td>
		<td width="" align="left" valign="middle" style="padding: 15px 0 0 0"><?php require($templatesPath."searcher.php");?></td>
	
		<td width="" align="right" valign="top" class="fctCon2"><p><strong class="subHeaderBtn"> STAFF NOTIFICATIONS</strong></p> </td> 
    <td width="" align="left" valign="top" class="fctCon2"> <div class="umltext">
        <div id="notifications" align="center"><img src="ajax-loader2.gif" width="16" height="16" /></div>
     </td>
     <td align="right" style="width: 100px;text-align: center;" class="fctCon2">

				<?php     		
			 @ $db = mysql_pconnect($SERVER ,$USERNAME,$PASSWORD);
				if(!$db){     echo"can't access database"; exit;}
				@mysql_select_db($DATABASE_NAME);

					$get_clcking = "select * from enquires_clock where admin_id = {$_SESSION['account_id']} and datee = '".date('Y-m-d')."' limit 1";
					if(!$resue = @mysql_query($get_clcking))
					{
						//	echo "Could not select from user. <br />".mysql_error();
					}
					$kaunda = @mysql_num_rows($resue);
					$rows1 =@ mysql_fetch_assoc($resue);
 				 ?>
					  <?php if($kaunda > 0):?>  
						<?php if($rows1['timeout'] == '00:00:00' ):?>    		
    					<input type="button" style="background-color: #98FB98; width: 100px;height: 30px;font-weight: bold;" value="Clock Out" onclick="clockin('<?php echo $_SESSION['account_id']?>',2)">
    				<?php endif;?>
					<?php else:?>
    				<input type="button" style="background-color: #98FB98; width: 100px;height: 30px;font-weight: bold;" value="Clock In" onclick="clockin('<?php echo $_SESSION['account_id']?>',1)">	
					<?php endif;?>
   					   		
      </td>  
	  <td width="" class="fctCon2">
			<table width="" border="0" align="center" cellpadding="4" cellspacing="0" style="background-color: white;width: 350px;">
        <tr>
          <td width=""><a href="javascript:loadPage('cn.php','mainContent');"><img src="img/notes.png" width="20" height="20" border="0" /></a></td>
          <td width=""><a href="javascript:loadPage('cn.php','mainContent');">Message  Staff</a></td>
          <td width=""><a href="javascript:loadPage('cr.php','mainContent')"><img src="img/rem.png" alt="" width="20" height="20" border="0" /></a></td>
          <td width=""><a href="javascript:loadPage('cr.php','mainContent')">Create a Reminder</a></td>
          <td width="80px">  
          	<a href="logout.php" style="background-color: white;padding: 2px;"><strong><img src="img/home_icon.png" width="13" height="10" border="0" />Log out</strong></a>
					</td>
        </tr>
      </table>	  
	  </td>	      		
	</tr>
</table>
</div>
