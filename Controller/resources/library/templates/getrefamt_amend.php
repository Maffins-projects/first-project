
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
	
    $query = 	"SELECT * FROM company_amendment WHERE id='$id'";
  	   
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
