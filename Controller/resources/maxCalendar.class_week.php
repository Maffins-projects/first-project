<?php
class maxCalendar{
 function showCalendar($year=0,$month=0){

  include("_connect.php");
	@ $db = mysql_pconnect($SERVER ,$USERNAME,$PASSWORD);
	if(!$db){     echo"can't access database"; exit;}
	mysql_select_db($DATABASE_NAME);

    // Get today, reference day, first day and last day info
    if (($year == 0) || ($month == 0)){
       $referenceDay    = getdate();
    } else {
       $referenceDay    = getdate(mktime(0,0,0,$month,1,$year));
    }
    $firstDay = getdate(mktime(0,0,0,$referenceDay['mon'],1,$referenceDay['year']));
		$lastDay  = getdate(mktime(0,0,0,$referenceDay['mon']+1,0,$referenceDay['year']));
		$today    = getdate();
    
   if(strlen($month) == 1){$month="0".$month;}
	 $sql = "select * from tracking_work where left(request_date,7) = '{$year}-{$month}' ";
	// echo $sql;
	 if(!$resu = mysql_query($sql))
  {
		  echo "Could not select from Work tracking. <br />".mysql_error();
  }
  
  $days = array();
  while($rows = mysql_fetch_assoc($resu))
	{
		$days[substr($rows['request_date'],-2)] = $rows;	
		$days_due[substr($rows['request_completion'],-2)] = $rows;	
	}
	//print_r($days_due) ;die;
	$style_request = "";
	// Create a table with the necessary header informations
	echo '<div id="containerr"><table class="month" style="width:900px" >';
	echo '  <tr><th colspan="7">'.$referenceDay['month']." - ".$referenceDay['year']."</th></tr>";
	echo '  <tr class="days"><td>Mo</td><td>Tu</td><td>We</td><td>Th</td><td>Fr</td><td>Sa</td><td>Su</td></tr>';
	
	
	// Display the first calendar row with correct positioning
	echo '<tr>';
	if ($firstDay['wday'] == 0) $firstDay['wday'] = 7;
	for($i=1;$i<$firstDay['wday'];$i++){
		echo '<td>&nbsp;</td>';
	}
	$actday = 0;
	for($i=$firstDay['wday'];$i<=7;$i++){
		$actday++;
		if (($actday == $today['mday']) && ($today['mon'] == $month)) {
			$class = ' class="actday"';
		} else {
			$class = '';
		}
		$style_request = "";
		$style_request_due = "";
		$linki = "";      
		if(@$days[$actday])
		{
			$style_request = " style='background-color:yellow'"; 
			$linki = "<br /><a href='admin.php?pid=66&day={$actday}&mon={$month}'>View</a>";
		}      
		if(@$days_due[$actday])
		{
			$style_request = " style='background-color:green;'"; 
			$linki = "<br /><a href='admin.php?pid=66&day={$actday}&mon={$month}'>View</a>";
		}      
		if( @$days_due[$actday] && @$days[$actday] )
		{
			$style_request = " style='background-color:#DAA520;'"; 
			$linki = "<br /><a href='admin.php?pid=66&day={$actday}&mon={$month}'>View</a>";
		}
		echo "<td$class $style_request>$actday $linki</td>";
	}
	echo '</tr>';
	
	//Get how many complete weeks are in the actual month
	$fullWeeks = floor(($lastDay['mday']-$actday)/7);
	
	for ($i=0;$i<$fullWeeks;$i++){
		echo '<tr>';
		for ($j=0;$j<7;$j++){
			$actday++;
    		if (($actday == $today['mday']) && ($today['mon'] == $month)) {
				$class = ' class="actday"';
			} else {
				$class = '';
			}
			
		$style_request = ""; 
		$linki = "";
		if(@$days[$actday])
		{
			$style_request = " style='background-color:yellow'"; 
			$linki = "<br /><a href='admin.php?pid=66&day={$actday}&mon={$month}'>View</a>";
		}
			if(@$days_due[$actday])
		{
			$style_request = " style='background-color:green;'"; 
			$linki = "<br /><a href='admin.php?pid=66&day={$actday}&mon={$month}'>View</a>";
		}      
		if( @$days_due[$actday] && @$days[$actday] )
		{
			$style_request = " style='background-color:#DAA520;'"; 
			$linki = "<br /><a href='admin.php?pid=66&day={$actday}&mon={$month}'>View</a>";
		}	
			echo "<td$class $style_request>$actday $linki</td>";
		}
		echo '</tr>';
	}
	
	//Now display the rest of the month
	if ($actday < $lastDay['mday']){
		echo '<tr>';
		
		for ($i=0; $i<7;$i++){
			$actday++;
    		if (($actday == $today['mday']) && ($today['mon'] == $month)) {
				$class = ' class="actday"';
			} else {
				$class = '';
			}
			
			$style_request = ""; 
			$linki = "";
		  if(@$days[$actday])
			{
				$style_request = " style='background-color:yellow'"; 
				$linki = "<br /><a href='admin.php?pid=66&day={$actday}&mon={$month}'>View</a>";
			}		
		if(@$days_due[$actday])
		{
			$style_request = " style='background-color:green;'"; 
			$linki = "<br /><a href='admin.php?pid=66&day={$actday}&mon={$month}'>View</a>";
		}      
		if( @$days_due[$actday] && @$days[$actday] )
		{
			$style_request = " style='background-color:#DAA520;'"; 
			$linki = "<br /><a href='admin.php?pid=66&day={$actday}&mon={$month}'>View</a>";
		}		
			if ($actday <= $lastDay['mday']){
				echo "<td$class $style_request>$actday $linki</td>";
			}
			else {
				echo '<td>&nbsp;</td>';
			}
		}
		
		
		echo '</tr>';
	}
	
	echo '</table></div>';
}

}
?>