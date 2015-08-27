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
					<td>Reference Number : <?php echo "LD".$Loadid?></td>
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
           <b>Removal details</b>
          </td>
        </tr>    
        <tr>
          <td style="background-color: #ccc;" colspan="2">Moving from</td>
        </tr>   
        <tr>
          <td>Address</td>
          <td>
          <?php 
            $Loaddata['Load']['from_address']."<br />";
            $Loaddata['Load']['from_province']."<br />";
            $Loaddata['Load']['from_postal_code']."<br />";
          ?>
          </td>
        </tr> 
        <tr>
          <td>Floor number </td>
          <td><?php $Loaddata['Load']['from_floor']?></td>
        </tr>  
        <tr>
          <td>Elevator Available</td>
          <td><?php $Loaddata['Load']['from_elevator']?></td>
        </tr> 
          <td>How many rooms</td>
          <td><?php $Loaddata['Load']['from_rooms']?></td>
        </tr>  
         <tr>
          <td style="background-color: #ccc;" colspan="2">Moving to</td>
        </tr> 
        <tr>
          <td>Address</td>
          <td>
          <?php 
            $Loaddata['Load']['to_address']."<br />";
            $Loaddata['Load']['to_province']."<br />";
            $Loaddata['Load']['to_postal_code']."<br />";
          ?>
          </td>
        </tr> 
        <tr>
          <td>Floor number </td>
          <td><?php $Loaddata['Load']['to_floor']?></td>
        </tr>  
        <tr>
          <td>Elevator Available</td>
          <td><?php $Loaddata['Load']['to_elevator']?></td>
        </tr> 
          <td>How many rooms</td>
          <td><?php $Loaddata['Load']['to_rooms']?></td>
        </tr>         
         <tr>
          <td style="background-color: #ccc;" colspan="2">Additional Information</td>
        </tr> 
        <tr>
          <td>I will need storage</td>
          <td><?php $Loaddata['Load']['require_storage']?></td>
        </tr>         
        <tr>
          <td>I require full assembly</td>
          <td><?php $Loaddata['Load']['require_full_assembly']?></td>
        </tr>         
        <tr>
          <td>I require packaging</td>
          <td><?php $Loaddata['Load']['packaging_service']?></td>
        </tr>         
        <tr>
          <td>Moving date</td>
          <td><?php $Loaddata['Load']['move_date']?></td>
        </tr>         <tr>
          <td>Inventory List</td>
          <td><?php $Loaddata['Load']['inventory_list']?></td>
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
