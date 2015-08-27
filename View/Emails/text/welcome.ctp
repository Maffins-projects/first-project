<style type="text/css">
	td {
		padding: 15px;
		line-height: 30px;
	}
</style>
<table style="border: 1px solid #000;">
		<tr style="background-color: white ;">
			<td style="background-color: white;">
				 <a href="http://www.tenderzone.co.za/"><img title="tenderzone" style="border: 0" src="http://www.tenderzone.co.za/img/long-logo.gif" alt="tenderzone" style="margin: 0 0 0 -25px;width: 100%;"></a>
			</td>
		</tr>
	<tr>
		<td style="background-color: orange;font-weight: bold;">
			Dear <?php echo $message['Subscription']['fname']." ".$message['Subscription']['lname']?>  <br />
			<table>
				<tr>
					<td>c/o <?php echo $message['companyname'];?> </td>
					<td>Subscription Number : <?php echo $sabhusikiraibha?></td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td>		
			<br />  <p>
			Thank you for signing up as a subscriber with TenderZone. Now you can look forward to endless growth prospects and an end to missed opportunities
      </p><p style="background-color: yellow;font-weight: bold;">
As a subscriber, you will receive a daily Tender Notification email by Industry Type, Keywords and Service/Products. .  </p><p>
Once we have received payment from you, your account will be activated and you will be able to start using the service. If you do not receive a confirmation that you account has been activated within 24 hours from sending us your proof of payment, please contact us by email at <a href="mailto:info@tenderzone.co.za">info@tenderzone.co.za</a> or call us during business hours on 0861 401 402 	</p>

	<table style="background: #ccc;border: 1px solid;">
		<tr>
			<td style="background-color: orange;font-weight: bold;">
				Account Information
			</td>
		</tr>
		<tr>
			<td>
			 Username: <?php echo $message['Subscription']['username'] ?> <br />
			 Password: <?php echo $message['Subscription']['password'] ?>
			</td>
		</tr>	
	</table>	
		</td>
	</tr>
	<tr>
		<td>
		<br />
		<br />
		If you have selected the direct deposit payment option, our banking details are as follows:
		<br />
		<br />
		<table style="background-color: #ccc;border:1px solid">
			<tr>
				<td>Account Name:</td>
				<td>Tenderzone</td>
			</tr>
			<tr>
				<td>Bank:</td>
				<td>Standard Bank</td>
			</tr>
			<tr>
				<td>Account Number:</td>
				<td>001 869 027</td>
			</tr>
			<tr>
				<td>Branch Code:</td>
				<td>004 305</td>
			</tr>
			<tr>
				<td colspan="2">
				  Send us proof of payment (fax to <?php echo $dhiteyils[0]['system_details']['fax']?>  or email: <?php echo $dhiteyils[0]['system_details']['email']?> )
				</td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td >
		<br />
  		<br />
			Regards<br />
			Tenderzone Team 
			<br />
			<br />
		</td>
	</tr>
	<tr>
		<td style="background-color: orange;text-align: center;">
		   For further assistance, kindly email our support team: info@tenderzone.co.za or Call us at <?php echo $dhiteyils[0]['system_details']['phone']?>
		</td>
	</tr>
</table>