
<?php
	
	include("../../../_connect.php");
	
	$id   = $_GET["q"];
	$type = $_GET["type"];
	
	$result_str = "";
	
	 	@ $db = mysql_pconnect("localhost","$USERNAME","$PASSWORD");

			if(!$db){
					 	echo"can't access database";
						exit;
					}
			
			mysql_select_db("$DATABASE_NAME");
	
	   if( $type == 1)
	   {
			  $query = 	"SELECT * FROM company_registration WHERE id='$id'";
	   }
	   elseif( $type == 2 )
	   {
			 $query = 	"SELECT id as cost FROM cc_registration WHERE id='$id'";
	   } else{
			  $query = 	"SELECT * FROM it_registration WHERE id='$id'";
	   }
	   
			$result = mysql_query($query);
			$val 	= mysql_num_rows($result);
			
      if($val > 0)
      {			
				$row = mysql_fetch_object($result);
				echo $row->cost;
	    }else{
				echo "";
	    }

?>
