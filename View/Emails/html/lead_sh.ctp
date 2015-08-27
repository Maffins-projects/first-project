<style type="text/css">
	td {
		padding: 15px;
		line-height: 30px;
	}
</style>
<table style="border: 1px solid #000;">
	<tr>
		<td style="background-color: orange;font-weight: bold;">
			Dear <?php echo $message['cm']['company_name'].": ".$message['cm']['c_name']." ".$message['cm']['c_surname']?>  <br />
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
			Good day the following client requires a quotation:
      </p>
      <table style="width: 800px;">
        <tr>
          <td style="background-color: #ccc;" colspan="2">
           <b>Customer Details</b>
          </td>
        </tr>
        <tr>
          <td>Name</td>
          <td><?php $user['User']['fname']?></td>
        </tr>
        <tr>
          <td>Surname</td>
          <td><?php $user['User']['lname']?></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><?php $user['User']['email']?></td>
        </tr>
        <tr>
          <td>Cellnumber</td>
          <td><?php $user['User']['cellnumber']?></td>
        </tr>
        <tr>
          <td>Day Time Number</td>
          <td><?php $user['User']['daytimenumber']?></td>
        </tr>
        <tr>
          <td style="background-color: lime;">
           <b>Service Details</b>
          </td>
        </tr> 
        <tr>
          <td style="background-color: #ccc;" colspan="2">
           <b>Passenger Details</b>
          </td>
        </tr> 
        <tr>
          <td>Number of Passengers</td>
          <td><?php $shuttledata['Shuttle']['number_of_passengers']?></td>
        </tr>  
        <tr>
          <td>Direction</td>
          <td><?php $shuttledata['Shuttle']['direction']?></td>
        </tr>  
        <tr>
          <td>Payment Method</td>
          <td><?php $shuttledata['Shuttle']['payment_method']?></td>
        </tr>  
        <tr>
          <td>Do you require a trailer</td>
          <td><?php if($shuttledata['Shuttle']['trailer'] == 1){ echo "Yes"; }else{ echo "No"; }?></td>
        </tr>   
        <tr>
          <td>Do you require a baby seat</td>
          <td><?php $shuttledata['Shuttle']['baby_seat']?></td>
        </tr>   
        <tr>
          <td style="background-color: #ccc;" colspan="2">Pick Up Details</td>
        </tr>   
        <tr>
          <td>Address</td>
          <td>
          <?php 
            $shuttledata['Shuttle']['pickup_address']."<br />";
            $shuttledata['Shuttle']['pickup_city']."<br />";
            $shuttledata['Shuttle']['pickup_province']."<br />";
            $shuttledata['Shuttle']['pickup_postal_code'];
          ?>
          </td>
        </tr> 
        <tr>
          <td>Date</td>
          <td><?php $shuttledata['Shuttle']['pickup_datetime']?></td>
        </tr>  
        <tr>
          <td>Flight Number</td>
          <td><?php $shuttledata['Shuttle']['pickup_flight_number']?></td>
        </tr>  
         <tr>
          <td style="background-color: #ccc;" colspan="2">Drop Off Details</td>
        </tr> 
        <tr>
          <td>Address</td>
          <td>
          <?php 
            $shuttledata['Shuttle']['to_address']."<br />";
            $shuttledata['Shuttle']['to_city']."<br />";
            $shuttledata['Shuttle']['to_province']."<br />";
            $shuttledata['Shuttle']['to_postal_code'];
          ?>
          </td>
        </tr> 
        <tr>
          <td>Date</td>
          <td><?php $shuttledata['Shuttle']['to_datetime']?></td>
        </tr>                            
        <tr>
          <td>Flight Number</td>
          <td><?php $shuttledata['Shuttle']['to_flight_number']?></td>
        </tr> 
      </table>
       <ul>
        <i><b>Note</b> Our service is completely free</i>
       </ul> 
     </td>
		</tr>
	<tr>
		<td style="">
		   For further assistance, kindly email our support team: info@removal-leads.co.za or Call us at +2773 128 2552
		</td>
	</tr>
</table>
