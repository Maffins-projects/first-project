<style type="text/css">
  td {
    padding: 15px;
    line-height: 30px;
  }
</style>
<table style="border: 1px solid #000;">
  <tr>
    <td style="background-color: #ccc;font-weight: bold;">
      Dear <?php echo $user[0]['users']['fname']." ".$user[0]['users']['lname']?>  <br />
      Your Reference Number : <?php echo "CB".$cabid?>
    </td>
  </tr>
  <tr>
    <td>    
  <p>
      Thank you for choosing us to compare quotations:
      </p>
      <p>The following companies will contact you with a quotation:   </p>
       <?php
        foreach($companies as $comp)
        {
          echo "<b>".$comp."</b><br />";
        }
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