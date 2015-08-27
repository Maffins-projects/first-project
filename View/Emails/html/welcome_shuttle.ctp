<style type="text/css">
	td {
		padding: 15px;
		line-height: 30px;
	}
</style>
<table style="border: 1px solid #000;">
	<tr>
		<td style="background-color: orange;font-weight: bold;">
			Dear <?php echo $user['users']['fname']." ".$user['users']['lname']?>  <br />
			<table>
				<tr>
					<td>Reference Number : <?php echo "SHL".$shuttleid?></td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td>		
			<br />  <p>
			Thank you for choosing us to compare quotations:
      </p>
      <p>Our top companies will be in touch with you shortly to give you quotations:   </p>
       <?php
        /*foreach($companies as $comp)
        {
          echo "<b>".$comp."</b><br />";
        }
        */
       ?>
       <i><b>Note</b> Our service is completely free</i>
     </td>
		</tr>
	<tr>
		<td style="">
		   For further assistance, kindly email our support team: info@removal-leads.co.za or Call us at +2773 128 2552
		</td>
	</tr>
</table>