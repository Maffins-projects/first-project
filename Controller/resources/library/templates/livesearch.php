
<?php
	
	include("_connect.php");
	
	$q=$_GET["q"];
	
	$result_str = "";
	
	 	@ $db = mysql_pconnect("localhost","$USERNAME","$PASSWORD");

			if(!$db){
					 	echo"can't access database";
						exit;
					}
			
			mysql_select_db("$DATABASE_NAME");
	
	$query = 	"SELECT * FROM company_registration WHERE id='$q'";
					
			$result = mysql_query($query);
			$val 	= mysql_num_rows($result);
			
	//$query = "SELECT * FROM uml_artists WHERE artist_name LIKE '%$q%' ORDER BY rate DESC LIMIT 0 , 5";
	
	//$result = mysql_query($query);
	
	//$val 	= mysql_num_rows($result);
	
if($val > 0){			
					$row 				= mysql_fetch_object($result);
						
						echo "<span  class='normalTextbold'>Company found:</span><img src='img/tick.png' /><br><span class='normalText'>".$row->company_name1."</span>";
			/*switch( $_REQUEST['ft'] ){
			
					case 1: $row 				= mysql_fetch_object($result);
						
						$company_name1 		= $row->company_name1;
						$company_name2 		= $row->company_name2;
						$company_name3 		= $row->company_name3;
						$company_name4 		= $row->company_name4;
						$company_id 		= $row->id;
						
						//$genres				= $row->genres;
						echo "<b>Search Results:</b><br><a href='javascript:loadPage(\"cor14_1.php?company_id=$company_id\",\"formArea\");' class='normalTextBold' title='$sq'>$company_name1</a>"; break;
				
				case 2:  $row 				= mysql_fetch_object($result);
						
						$company_name1 		= $row->company_name1;
						$company_name2 		= $row->company_name2;
						$company_name3 		= $row->company_name3;
						$company_name4 		= $row->company_name4;
						$company_id 		= $row->id;
						echo "<a href='javascript:loadPage(\"cor15_1A.php?company_id=$company_id\",\"formArea\");' >$company_name1</a>"; break;
				case 3: $row 				= mysql_fetch_object($result);
						$company_name1 		= $row->company_name1;
						$company_name2 		= $row->company_name2;
						$company_name3 		= $row->company_name3;
						$company_name4 		= $row->company_name4;
						$company_id 		= $row->id;
						echo "<a href='javascript:loadPage(\"cor14_1A.php?company_id=$company_id\",\"formArea\");' >$company_name1</a>"; break;
				default: break;
		
			}
	
*/
	}
	
	//echo $result_str;
?>