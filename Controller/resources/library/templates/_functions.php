<?php 


function size_hum_read($size){

  $i=0;
  $iec = array("B", "KB", "MB", "GB", "TB", "PB", "EB", "ZB", "YB");
  while (($size/1024)>1) {
   $size=$size/1024;
   $i++;
  }
  return substr($size,0,strpos($size,'.')+4)." ".$iec[$i];
}

function get_artist_id($value){

			include("_connect.php");@ $db = mysql_pconnect($SERVER ,$USERNAME,$PASSWORD);

			if(!$db){ 	echo"can't access database"; exit;}
			
			mysql_select_db($DATABASE_NAME);

					$result 	= mysql_query("SELECT * FROM uml_artists where artist_name = '$value'");
					
					if($result === false) 
						{ 
						   return false; 
						} 
						if(mysql_num_rows($result) == 0) 
						{ 
						   return null; 
						} 
						else 
						{ 
						   $row = mysql_fetch_object($result);
					
							return $row->artist_id;
					 
						} 
					
			}
	
function generate_id($table, $id){

	$letters = "ABCDEFGHIJKLMNOPRQSTUVWXYZ";
	
include("_connect.php");@ $db = mysql_pconnect($SERVER ,$USERNAME,$PASSWORD);

			if(!$db){ 	echo"can't access database"; exit;}
			
			mysql_select_db($DATABASE_NAME);
	
		while(1){
		
						
					$generated_id = $letters{rand(0,25)}.rand(0,9).rand(0,9).rand(0,9);
				
					$query = "select * $table where $id = '$generated_id'";
		
					$result = mysql_query($query);
					
					if( $result ){
					;
						}else{ return $generated_id ;}
					}
			}


///////////////////////////////			
			
function generate_folder($table, $column){

	$letters = "ABCDEFGHIJKLMNOPRQSTUVWXYZ";
include("_connect.php");
@ $db = mysql_pconnect($SERVER ,$USERNAME,$PASSWORD);

			if(!$db){ 	echo"can't access database"; exit;}
			
			mysql_select_db($DATABASE_NAME);
	
		while(1){
		
						
					$generated_folder = "uml_".$letters{rand(0,25)}.rand(0,9).rand(0,9).rand(0,9).rand(0,9).$letters{rand(0,25)}.$letters{rand(0,25)};
				
					$query = "select * $table where $column = '$generated_folder'";
		
					$result = mysql_query($query);
					
					if( $result ){
					;
						}else{ return $generated_folder ;break;}
					}
			}
			
	////////////////////////////////////////					
			
function get_label_id($value){

include("_connect.php");@ $db = mysql_pconnect($SERVER ,$USERNAME,$PASSWORD);

			if(!$db){ 	echo"can't access database"; exit;}
			
			mysql_select_db($DATABASE_NAME);

		
					$query = "SELECT * FROM `uml_labels` where name = '$value'";
					$result = mysql_query($query);
					$row	= mysql_fetch_object($result);
					return $row->label_id;
					
			}	
			
				////////////////////////////////////////					

function get_album_id($artist_id,  $album_name){

include("_connect.php");@ $db = mysql_pconnect($SERVER ,$USERNAME,$PASSWORD);

			if(!$db){ 	echo"can't access database"; exit;}
			
			mysql_select_db($DATABASE_NAME);
		
					$query = "SELECT * FROM `uml_artist_albums` where album_name = '$album_name' AND artist_id = '$artist_id'";
					$result = mysql_query($query);
					
							if($result === false) 
						{ 
						   return false; 
						} 
						if(mysql_num_rows($result) == 0) 
						{ 
						   return null; 
						} 
						else 
						{ 
						   $row = mysql_fetch_object($result);
					
							return $row->album_id;
					
						} 
					
					
			}	
					

			
			////////////////////////////////////////				
			
function get_album_folder($id){

	include("_connect.php");@ $db = mysql_pconnect($SERVER ,$USERNAME,$PASSWORD);

			if(!$db){ 	echo"can't access database"; exit;}
			
			mysql_select_db($DATABASE_NAME);

		
					$query = "SELECT * FROM `uml_albums` where album_id = '$id'";
					$result = mysql_query($query);
					$row	= mysql_fetch_object($result);
					return $row->secret_folder;
					
			}		
			/////////////////////////////////////
	
function get_artist_folder($id){

include("_connect.php");@ $db = mysql_pconnect($SERVER ,$USERNAME,$PASSWORD);

			if(!$db){ 	echo"can't access database"; exit;}
			
			mysql_select_db($DATABASE_NAME);

		
					$query = "SELECT * FROM `uml_music_artists` where artist_id = '$id'";
					$result = mysql_query($query);
					
					if($result === false) 
						{ 
						   return false; 
						} 
						if(mysql_num_rows($result) == 0) 
						{ 
						   return null; 
						} 
						else 
						{ 
						   $row = mysql_fetch_object($result);
					
							return $row->secret_folder;
					 
						} 
					
					
			}		
			//////////////////////////////////////			
///////// artist , label, album thumbnail generator

function generate_thumbnail_aa($filename, $new_width_height, $secret_folder , $type){

		$letters = "ABCDEFGHIJKLMNOPRQSTUVWXYZ";
		// Content type
		header('Content-type: image/jpeg');
		
		// Get new sizes
		list($width, $height) = getimagesize($filename);
				
				if($width >= $height){ 
						
							if($width == $height){$newheight = $new_width_height; $newwidth = $new_width_height; }
							else{
							
							$newwidth = $new_width_height; 
							$newheight = $height * ( $new_width_height / $width); }
						
				}else{
				
					
					$newheight 	= $new_width_height; 
					$newwidth 	= $width * ( $new_width_height / $height);
						
				 }
				
				
		// Load
		$thumb 	= imagecreatetruecolor($new_width_height, $new_width_height);
		$white = imagecolorallocate($thumb, 255, 255, 255);
		imagefill($thumb, 0, 0, $white);
		$source = imagecreatefromjpeg($filename);
		
		// Resize
		
		imagecopyresampled($thumb, $source, (($new_width_height - $newwidth) / 2), (($new_width_height - $newheight) / 2), 0, 0, $newwidth, $newheight, $width, $height);
		
		// Output
		
		include("_connect.php");

@ $db = mysql_pconnect($SERVER ,$USERNAME,$PASSWORD);

			if(!$db){ 	echo"can't access database"; exit;}
			
			mysql_select_db($DATABASE_NAME);
	
		while(1){
		
						
$newfilename = $letters{rand(0,25)}.rand(0,9).rand(0,9).rand(0,9).rand(0,9).$letters{rand(0,25)}.$letters{rand(0,25)}.$letters{rand(0,25)}.rand(0,9).rand(0,9).rand(0,9).rand(0,9).$letters{rand(0,25)}.$letters{rand(0,25)}.".jpg";
				
				
	switch($type){
	
		case 0:	$query = "select * from uml_artists where picture = '$newfilename' OR thumbnail = '$newfilename'";
				break;
		
		case 1:	$query = "select * from uml_labels where logo = '$newfilename' OR thumbnail = '$newfilename'";
				break;
		
		case 2:	$query = "select * from uml_artist_albums where album_cover = '$newfilename' OR thumbnail = '$newfilename'";
				break;
		
		case 3:	$query = "select * from uml_artist_articles where article_picture = '$newfilename' OR tiny_thumbnail = '$newfilename'";
				break;
						
		case 4:	$query = "select * from uml_artist_photos where photo = '$newfilename' OR thumbnail = '$newfilename' OR tiny_thumbnail = '$newfilename'";
				break;
		
						
		default: exit;		
	
				}
		
		$result = mysql_query($query);		
		
		if( mysql_num_rows($result) == 0 ){	break;}else{ ; }
					
					}
		
		
		$newfilename1 	= "$secret_folder/$newfilename";
		
		imagejpeg($thumb,$newfilename1,100);
		
		return $newfilename;
}

//////////////////////////////////////////

function create_record_label($name, $about, $img){
	
	$letters = "ABCDEFGHIJKLMNOPRQSTUVWXYZ";
	
	if($name == NULL){return 0;}
	
	
	$label_name 	= $name;
	$about_label 	= $about; 
	$date_created 	= date('Y-m-d');
	$logo 			=  NULL; 
	$thumbnail 		=  NULL; 
	
	if($img != NULL){
	
			$logo 			=  generate_thumbnail_aa($img,200, "uml_artists/img/labels",1); 
			$thumbnail 		=  generate_thumbnail_aa($img,50, "uml_artists/img/labels",1);
	
	}else{
			$logo 			= "default_logo.jpg"; 
			$thumbnail 		= "default_thumbnail.jpg";	
	} 
	
			include("_connect.php");

@ $db = mysql_pconnect($SERVER ,$USERNAME,$PASSWORD);

			if(!$db){ 	echo"can't access database"; exit;}
			
			mysql_select_db($DATABASE_NAME);
	


$query	= "insert into uml_music_record_label values ('', '$label_name', '$about_label','$logo', '$thumbnail', '$date_created')";
$result = mysql_query($query);

if( $result ){ return 1;}else{ return 0;}	

}

//////////////////////////

function edit_record_label($label_id ,$name, $about, $img){
	
	$letters = "ABCDEFGHIJKLMNOPRQSTUVWXYZ";
	
	if(($about == NULL)&($img == NULL)&($name == NULL)){return 1;}
	if($label_id == NULL){return 0;}
	
	$label_name 	= $name;
	$about_label 	= $about; 
	$logo 			=  NULL; 
	$thumbnail 		=  NULL; 
	
				include("_connect.php");

@ $db = mysql_pconnect($SERVER ,$USERNAME,$PASSWORD);

			if(!$db){ 	echo"can't access database"; exit;}
			
			mysql_select_db($DATABASE_NAME);
			
				$query		= "select * from uml_labels WHERE label_id ='$label_id '";

				$result = mysql_query($query);
	
				$row = mysql_fetch_object($result);
	
	if($img != NULL){
	
			$file1 = "uml_artists/img/labels/$row->logo";
			$file2 = "uml_artists/img/labels/$row->thumbnail";
		
			if($row->logo 		!= 'default_logo.jpg'){if(file_exists($file1)){unlink($file1);}}
			if($row->thumbnail 	!= 'default_thumbnail.jpg'){if(file_exists($file2)){unlink($file2);}}
					
			$logo 			=  generate_thumbnail_aa($img,200, "uml_artists/img/labels",1); 
			$thumbnail 		=  generate_thumbnail_aa($img,50, "uml_artists/img/labels",1);
	
	}
	

				
				
								
	if($label_name == NULL){$label_name = $row->name;}
	
	if($logo == NULL){$logo  = $row->logo;}
	
	if($thumbnail == NULL){$thumbnail = $row->thumbnail;}
	
	if($about_label == NULL){$about_label = $row->about_the_label;}
				

	$query = "UPDATE uml_labels SET name = '$label_name', logo = '$logo', thumbnail = '$thumbnail', about_the_label = '$about_label' WHERE label_id ='$label_id '";

	$result = mysql_query($query);

	if( $result ){ return 1;}else{ return 0;}	

}
////////////////// Add Database 


	function add_artist($artist_name, $label_id, $genre, $img, $email , $cell , $username, $password ){
	
	
			if($label_id 	== NULL){return 0;}
			if($artist_name == NULL){return 0;}
			if($username 	== NULL){return 0;}
			if($cell 		== NULL){return 0;}
			if($password 	== NULL){return 0;}
			if($email 		== NULL){return 0;}
			$type 			= "artist";
			
			//verify email, cell and password
			
			if($genre == NULL){$genre = "Unknown";}
			
			$secret_folder 			=  "uml_artists/img/artists/";
			
			$thumbnail 				=  generate_thumbnail_aa($img, 50,	$secret_folder, 0);
			$picture				=  generate_thumbnail_aa($img, 200, $secret_folder, 0);
			$date_created 			=  date('Y-m-d');
			
			include("_connect.php");

	
			@ $db = mysql_pconnect($SERVER ,$USERNAME,$PASSWORD);

	 		if(!$db){ 	echo"can't access database"; exit;}
			
			mysql_select_db($DATABASE_NAME);
			
			$artist_name 	= mysql_real_escape_string($artist_name);
			$username 		= mysql_real_escape_string($username);
			$password 		= mysql_real_escape_string($password);
			$email 	= mysql_real_escape_string($artist_name);
			//$username 		= mysql_real_escape_string($username);
			//$password 		= mysql_real_escape_string($password);
	
	$query	= "insert into uml_accounts values ('', '$label_id', '$type', '$username', '$password', '$cell', '$email', '_label' ,'$date_created')";
			$result 	= mysql_query($query);
			$account_id = mysql_insert_id();
	
			
	$query	= "insert into uml_artists values ('','$account_id', '$label_id', '$artist_name','', '$genre','$picture','$thumbnail', '0', '$date_created')";
			
			$result = mysql_query($query);
			$artist_id = mysql_insert_id();
	
	$query	= "insert into uml_artist_profiles values ('$artist_id','', '', '','', '', '','')";
			$result = mysql_query($query);
					
			$datetime = date('Y-m-d h:i:s');
			
			if( $result ){ 
			
			$query	= "insert into log_table values ('$account_id','Artist ($artist_name) added successfully', '$datetime')";
			
			$result = mysql_query($query);
				;return 1;}else{
				
			$query	= "insert into log_table values ('$account_id','Artist ($artist_name) was not added successfully', '$datetime')";
			
			$result = mysql_query($query);
				
				return 0;}				
	
	
	}
	
///////////////////////// add new album

function add_album($album_name, $artist_id, $genre, $about_album,$img, $pdf, $official_date, $album_price){
	
	
			//if($account_id == NULL){return 0;}
			
			if($album_name == NULL){return 0;}
			
			if($artist_id == NULL){return 0;}
			
			if($genre == NULL){$genre = "Unknown";}
			
			include("_connect.php");
		
			$album_id 				=  generate_id("uml_albums", "album_id");
			//$artist_id 				=  get_artist_id($artist_name);
			$artist_secret_folder	=  "uml_artists";
			$secret_folder 			=  generate_folder("uml_albums", "secret_folder");
			
			if(!mkdir("$artist_secret_folder/$secret_folder", 0777)){ return 0;}
			
			$album_secret_folder 	= "$artist_secret_folder/$secret_folder";
			
			if($img != NULL){$thumbnail 				=  generate_thumbnail_aa($img, 50, $album_secret_folder, 2);}
			if($img != NULL){$cover_art					=  generate_thumbnail_aa($img, 200, $album_secret_folder, 2);}
			
			$official_date 			=  $official_date;
			$uml_date 				=  date('Y-m-d');
			$pdf_file 				= "None";
			$content_upfile 		= "$album_secret_folder/$album_name.pdf";
			$downloads 				= 0;
			$rate 					= 0;
			
			if($pdf != NULL){if(!move_uploaded_file($pdf, $content_upfile)){
					
			//	$pdf_file = "None" ;
					}
				else
			{
				$pdf_file = "$album_name.pdf" ;
				chmod($content_upfile, 0777);}
				
				}
			
		@ $db = mysql_pconnect($SERVER ,$USERNAME,$PASSWORD);

	 		if(!$db){ 	echo"can't access database"; exit;}
			
			mysql_select_db($DATABASE_NAME);
			
			$album_name = mysql_real_escape_string( $album_name );
			$about_album = mysql_real_escape_string( $about_album );

$query	= "insert into `uml_artist_albums` values ('$artist_id', '$album_id', '$album_name', '$genre', '$thumbnail', '$cover_art', '$secret_folder','$about_album','$pdf_file','$official_date', '$uml_date','$album_price','$downloads','$rate')";
			
			$result = mysql_query($query);
			
			if( $result ){ return $album_id;}else{ return 0;}				
	
	}

function upload_song($artist_id, $album_id, $album_name, $track_name , $content , $content_size , $price){
		
		session_start();
		include("_connect.php");
	
		$letters = "ABCDEFGHIJKLMNOPRQSTUVWXYZ";
		$track_info = "none"; 
		$content_data_name;
		$track_id;
		
		/////////////////////////////////check if data is loaded/////////////////////////////////////////////////////
	
		if($content == NULL){echo "<p>Error! No data loaded for mp3.</p>"; return 0;}
		if($content_size == 0){echo "<p> Mp3 file has zero file size</p>"; return 0;}
		
		///////////////////////
		
		@ $db = mysql_pconnect($SERVER ,$USERNAME,$PASSWORD);

			if(!$db){ 	echo"can't access database"; exit;}
			
			mysql_select_db($DATABASE_NAME);
	
			
	//////////////////////////////////////		
			while(1){
					
					$track_id 	= $letters{rand(0,25)}.rand(0,9).rand(0,9).rand(0,9).rand(0,9);
					
					$result 	= mysql_query("select * from `uml_artist_songs` where song_id = '$track_id'");
					
					if(mysql_num_rows($result) > 0){
								;
					}
						else{break;}
					
					}		
		//////////////////////////////	
				
			while(1){
					
					
					$content_data_name = $letters{rand(0,25)}.rand(0,999).rand(0,999).rand(0,999).rand(0,999).rand(0,999).rand(0,999).rand(0,999).rand(0,999).rand(0,999).rand(0,999);
					
					$query = "select * from `uml_artist_songs` where song_data = '$content_data_name'";
					
					$result = mysql_query($query);
					
					if(mysql_num_rows($result) > 0){
								;
					}
						else{break;}
					
					} 
			
						
		//////////////////////////////////	get key music folder and alias
		
		
		///////////////////////////////// connection
		
			
			@ $db = mysql_pconnect($SERVER ,$USERNAME,$PASSWORD);

			if(!$db){ 	echo"can't access database"; exit;}
			
			mysql_select_db($DATABASE_NAME);
						
			$query 	= "SELECT a.artist_id, a.artist_name, al.album_genre, al.secret_folder, ( SELECT count( album_id ) FROM uml_artist_songs
WHERE album_id = '$album_id') AS num_of_songs
FROM uml_artists AS a, uml_artist_albums AS al
WHERE a.artist_id ='$artist_id'
AND al.album_id = '$album_id'
LIMIT 0 , 30";
									
			$result 			= mysql_query($query);
			$row 				= mysql_fetch_object($result);
			
			$artist_name		= $row->artist_name;
			$genre				= $row->album_genre;
			$folder				= "uml_artists/$row->secret_folder/";
			$song_number		= $row->num_of_songs + 1;
			
			/////////////////////////////////////////////////////
			
			
			$content_upfile 	= $folder.$content_data_name;
			
			
		
		if(!move_uploaded_file($content, $content_upfile)){
					
				echo "<p>failed to copy file. try again later.</p>";  
				
					return 0;
				
					}
				
				chmod($content_upfile, 0777);
				
			
			//////////////// other values
			
			$downloads	= 0;
			$rating		= 0;
			$previews	= 0;
		
			/////////////////// upload song record
			
			@ $db = mysql_pconnect($SERVER ,$USERNAME,$PASSWORD);

			if(!$db){ 	echo"can't access database"; exit;}
			
			mysql_select_db($DATABASE_NAME);


		$query 	= "insert into uml_artist_songs values ('$album_id','$track_id', '$song_number', '$track_name', '$genre', '$content_size', '$track_info','$content_data_name','$price','0','0','$downloads', '$rating', '$previews')";
			
			//$_SESSION['state'] = 3;
			
			$result 	= mysql_query($query);
			
			if($result){	return true;	}	else{	return false; }
		
	}


///////////////////////////
function add_video($artist_id, $video_name, $link){
	
	
			if($artist_id == NULL){return 0;}
			
			if($video_name == NULL){return 0;}
			
			if($link == NULL){return 0;}
			
			//////////////////////
			$vid_date = date('Y-m-d');
			
			include("_connect.php");
		
		$link = str_replace("watch?v=", "v/", $link);
			
		@ $db = mysql_pconnect($SERVER ,$USERNAME,$PASSWORD);

			if(!$db){ 	echo"can't access database"; exit;}
			
			mysql_select_db($DATABASE_NAME);
	
			$link 		= mysql_real_escape_string($link);
			$video_name = mysql_real_escape_string($video_name);
	
			$query	= "insert into `uml_artist_videos` values ('$artist_id', '', '$video_name', '$link', '$vid_date','0','0','0')";
			
			$result = mysql_query($query);
			
			if( $result ){ return 1;}else{ return 0;}				
	
	}


//////////////////
function delete_song($song_id, $album_id){

	
			if($song_id == NULL){return 0;}
			if($album_id == NULL){return 0;}
			
	
	include("_connect.php");
	
		@ $db = mysql_pconnect($SERVER ,$USERNAME,$PASSWORD);

		if(!$db){ 	echo"can't access database"; exit;}
			
		mysql_select_db($DATABASE_NAME);
	
			$q 				=	"SELECT al.secret_folder, s.song_data
FROM uml_artist_albums AS al, uml_artist_songs AS s
WHERE al.album_id = '$album_id'
AND s.song_id = '$song_id'
LIMIT 0 , 1";

			$result 		= mysql_query($q);
			$row 			= mysql_fetch_object($result);
			$secret_folder	= $row->secret_folder;
			$song_file		= $row->song_data;
			
			$f = "uml_artists/$secret_folder/$song_file"; 
			if(is_file($f)) {

					//fclose($f);
					if(unlink($f)){
				
						$query 				= "delete from uml_artist_songs where song_id='$song_id'";
						$result 			= mysql_query($query);
					
					}
				}
				
			if($result){	return true;	}else{	return false; }

}

function delete_album($album_id){

			
	include("_connect.php");
	
		@ $db = mysql_pconnect($SERVER ,$USERNAME,$PASSWORD);

		if(!$db){ 	echo"can't access database"; exit;}
			
		mysql_select_db($DATABASE_NAME);
	
			if($album_id == NULL){return 0;}
			
			$result 		= mysql_query("SELECT * from uml_artist_songs WHERE album_id='$album_id'");
			$no_songs 		= mysql_num_rows($result);
			//$row 			= mysql_fetch_object($result);
			
			for($i =0; $i < $no_songs; $i++){
			
					$row			= mysql_fetch_object($result);
					$song_id		= $row->song_id;
					
					delete_song($song_id, $album_id);
			}
		
			$q 	= "SELECT * from uml_artist_albums where album_id = '$album_id'";
			$result 			= mysql_query($q);
			$row 				= mysql_fetch_object($result);
			
			$pdf_file 		= "uml_artists/$row->secret_folder/$row->album_pdf";
			$thumbnail_file = "uml_artists/$row->secret_folder/$row->thumbnail";
			$cover_file 	= "uml_artists/$row->secret_folder/$row->album_cover";
			
			if(is_file($pdf_file)){  unlink($pdf_file);}
			if(is_file($thumbnail_file)){  unlink($thumbnail_file);}
			if(is_file($cover_file)){ unlink($cover_file);}
			
			rmdir("uml_artists/$row->secret_folder");
			
			$query 				= "delete from uml_artist_albums where album_id='$album_id'";
			$result 			= mysql_query($query);
			if($result){	return true;	}else{	return false; }
						
}

/////////////////////////////

function delele_photo($photo_id){
	
		
		include("_connect.php");
		
			@ $db = mysql_pconnect($SERVER ,$USERNAME,$PASSWORD);

			if(!$db){ 	echo"can't access database"; exit;}
			
			mysql_select_db($DATABASE_NAME);
	
	
		$query 				= "select * from uml_artist_photos where photo_id = '$photo_id'";
		$result 			= mysql_query($query);
		$row				= mysql_fetch_object($result);
		
				$file1 = "artist_images/$row->photo";
				$file2 = "artist_images/$row->thumbnail";
				$file3 = "artist_images/$row->tiny_thumbnail";
		
				if(file_exists($file1)){unlink($file1);}
				if(file_exists($file2)){unlink($file2);}
				if(file_exists($file3)){unlink($file3);}
				
		$query 				= "delete from uml_artist_photos where photo_id='$photo_id'";
		$result 			= mysql_query($query);
			
		if($result){	return true;	}	else{	return false; }	
	
		}
		
		///////////////////////////////
	function delele_article($article_id){
	
		
		include("_connect.php");
		
			@ $db = mysql_pconnect($SERVER ,$USERNAME,$PASSWORD);

			if(!$db){ 	echo"can't access database"; exit;}
			
			mysql_select_db($DATABASE_NAME);
	
	
		$query 				= "select * from uml_artist_articles where article_id = '$article_id'";
		$result 			= mysql_query($query);
		$row				= mysql_fetch_object($result);
		
				$file1 = "uml_articles/img/$row->article_picture";
				$file2 = "uml_articles/img/$row->thumbnail";
		
		
				if(file_exists($file1)){unlink($file1);}
				if(file_exists($file2)){unlink($file2);}
	
	
		$query 				= "delete from uml_artist_articles where article_id='$article_id'";
		$result 			= mysql_query($query);
			
		if($result){	return true;	}	else{	return false; }	
	
		}
	





////////////////////


function delete_artist($artist_id){

		// only label admin
		if($artist_id == NULL){return 0;}
		
		include("_connect.php");
	
		@ $db = mysql_pconnect($SERVER ,$USERNAME,$PASSWORD);

		if(!$db){ 	echo"can't access database"; exit;}
			
			mysql_select_db($DATABASE_NAME);
	
			
			$result 		= mysql_query("SELECT * from uml_artists AS a, uml_accounts AS acc WHERE a.artist_id='$artist_id' AND a.account_id=acc.account_id");
			$no_ 			= mysql_num_rows($result);
			$row			= mysql_fetch_object($result);
			$creator 		= $row->creator ;
					
	if($creator == "_label"){
	
		include("_connect.php");
	
		@ $db = mysql_pconnect($SERVER ,$USERNAME,$PASSWORD);

		if(!$db){ 	echo"can't access database"; exit;}
			
			mysql_select_db($DATABASE_NAME);
	
			
			$result 		= mysql_query("SELECT * from uml_artist_albums WHERE artist_id='$artist_id'");
			$no_albums 		= mysql_num_rows($result);
			
			for($i =0; $i < $no_albums; $i++){
			
					$row			= mysql_fetch_object($result);
					$album_id		= $row->album_id;
					
					delete_album($album_id);
			}
			
			$q 	= "SELECT * from uml_artists where artist_id = '$artist_id'";
			$result 			= mysql_query($q);
			$row 				= mysql_fetch_object($result);
			
			$thumbnail_file = "uml_artists/img/artists/$row->thumbnail";
			$cover_file 	= "uml_artists/img/artists/$row->picture";
			
			if($thumbnail_file != '_user.jpg'){	if(is_file($thumbnail_file)){  unlink($thumbnail_file);} }
			if($row->picture != 'user.jpg'){	if(is_file($cover_file)){ unlink($cover_file);} }
			
			
			$result 		= mysql_query("SELECT * from uml_artist_photos WHERE artist_id='$artist_id'");
			$no_photos 		= mysql_num_rows($result);
			
			for($i =0; $i < $no_photos; $i++){
			
					$row			= mysql_fetch_object($result);
					$photo_id		= $row->photo_id;
					
					delele_photo($photo_id);
			
			}
			
			$result 		= mysql_query("SELECT * from uml_artist_articles WHERE artist_id='$artist_id'");
			$no_articles 		= mysql_num_rows($result);
			
			for($i =0; $i < $no_articles; $i++){
			
					$row			= mysql_fetch_object($result);
					$article_id	= $row->article_id;
					
					delele_article($article_id);
			
			}
			
			
			$query 				= "delete from uml_artist_messages where artist_id='$artist_id'";
			$result 			= mysql_query($query);
			
			$query 				= "delete from uml_artist_comments where artist_id='$artist_id'";
			$result 			= mysql_query($query);
			
			$query 				= "delete from uml_artist_profiles where artist_id='$artist_id'";
			$result 			= mysql_query($query);
			
			$query 				= "delete from uml_artists where artist_id='$artist_id'";
			$result 			= mysql_query($query);
			
			
			if($result){	return true;	}else{	return false; }
			
			}else{
			
			$query 	= "update uml_accounts set label_id = '1' where account_id = '$row->account_id'";
			$result	= mysql_query($query);
			if($result){	return true;	}else{	return false; }
			
			}

}

function create_account($username, $email, $password, $mobile, $reg_code, $label_name){

		include("_connect.php");
		
			@ $db = mysql_pconnect($SERVER ,$USERNAME,$PASSWORD);
	
			if(!$db){ 	echo"can't access database"; exit;}
				
			mysql_select_db($DATABASE_NAME);
			
			$account_date = date('Y-m-d');
	
	$query = "insert into `uml_accounts` values ('', '1', 'multi-artists', '$username', '$password','$mobile','$email','_self','$account_date')";
	$result = mysql_query($query);
	$account_id = mysql_insert_id();
	
	if($label_name == NULL){ $label_name = $letters{rand(0,25)}.$letters{rand(0,25)}.$letters{rand(0,25)}.rand(0,9).rand(0,9).rand(0,9);}
	
		$about_label 	= "None"; 
		$logo 			= "default_logo.jpg"; 
		$thumbnail 		= "default_thumbnail.jpg";	


	$query		= "insert into uml_labels values ('','$account_id', '$label_name', '$about_label','$logo', '$thumbnail', '0')";
	$result 	= mysql_query($query);
	$label_id = mysql_insert_id();
	
	$query1 	= "update registration set activation_status = '1' where reg_code = '$reg_code'";
	$result1	= mysql_query($query1);
	
	$query2 	= "update uml_accounts set label_id = '$label_id' where account_id = '$account_id'";
	$result2	= mysql_query($query2);
	
					
	if( $result ){ return 1;}else{ return 0;}	
}

////////////////////////////////



function create_artist_account($username, $email, $password, $mobile, $artist_name){

		include("_connect.php");
		
			@ $db = mysql_pconnect($SERVER ,$USERNAME,$PASSWORD);
	
			if(!$db){ 	echo"can't access database"; exit;}
				
			mysql_select_db($DATABASE_NAME);
			
			$account_date = date('Y-m-d');
	
	$query = "insert into `uml_accounts` values ('', '1', 'artist', '$username', '$password','$mobile','$email','_self','$account_date')";
	$result = mysql_query($query);
	$account_id = mysql_insert_id();
	
	$query		= "insert into uml_artists values ('','$account_id', '1', '$artist_name', '', '', '', '', '0', '$account_date')";
	$result 	= mysql_query($query);
	$artist_id = mysql_insert_id();
	
	$query		= "insert into uml_artists values ($artist_id', '$artist_name', '', '', '', '', '','')";
	$result 	= mysql_query($query);
	$artist_id 	= mysql_insert_id();
					
	if( $result ){ return 1;}else{ return 0;}	
}


//////////////////////////
function album_update($album_id, $album_name , $album_info, $album_cover, $genre, $pdf , $price ,$release_date){
		
			//include("_functions.php");
			include("_connect.php");
			
			@ $db = mysql_pconnect($SERVER ,$USERNAME,$PASSWORD);

			if(!$db){ 	echo"can't access database"; exit;}
			
			mysql_select_db($DATABASE_NAME);
		
			$name_pdf;
		
		////////////////////			
		//	$thumbnail;   //
		////////////////////
		
		$query = "select * from uml_artist_albums where album_id = '$album_id'";
			
		$result 			= mysql_query($query);
		$album_row			= mysql_fetch_object($result);
		
		$album_secret_folder 	= "uml_artists/$album_row->secret_folder";
				
		
		if($album_name == NULL ){ $album_name =  $album_row->album_name; }
		if($album_info == NULL ){ $album_info = $album_row->album_info;	}
		if($genre == NULL ){  $genre = $album_row->album_genre; }
		if($release_date == NULL ){  $release_date = $album_row->release_date; }

		$album_info = mysql_real_escape_string($album_info);
		$album_name = mysql_real_escape_string($album_name);
		
		if($album_cover != NULL){
		
				$file1 = "uml_artists/$album_row->secret_folder/$album_row->album_cover";
				$file2 = "uml_artists/$album_row->secret_folder/$album_row->thumbnail";
		
				if(file_exists($file1)){unlink($file1);}
				if(file_exists($file2)){unlink($file2);}
				
		
				$thumbnail 				=  generate_thumbnail_aa($album_cover, 50 , $album_secret_folder, 2);
				$album_cover			=  generate_thumbnail_aa($album_cover, 200, $album_secret_folder, 2);
				
				
			}else{
			
					$thumbnail 			= $album_row->thumbnail;
					$album_cover		= $album_row->album_cover;
				}
		
		if($pdf != NULL){
		
		$content_upfile 		= "$album_secret_folder/$album_name.pdf";
		
		$file3 					= "uml_artists/$album_row->secret_folder/$album_row->album_pdf";
		
		if(file_exists($file3)){unlink($file3);}
				
		if(!move_uploaded_file($pdf, $content_upfile)){
					
						$name_pdf = "None";
			
					}else{
					
					
						$name_pdf = "$album_name.pdf" ;
						chmod($content_upfile, 0777);
					
				}
			
			}else{
			
						$name_pdf = $album_row->album_pdf;
			
			}


$query = "update UML_ARTIST_AlBUMS set release_date = '$release_date', album_info = '$album_info', album_cover = '$album_cover', thumbnail = '$thumbnail', album_name = '$album_name', album_genre = '$genre' , album_pdf = '$name_pdf' where album_id = '$album_id '";
	
	$result 			= 	mysql_query($query);
	
	if( $result ){ return 1;}else{ return 0;}	
		
		
		}
		
function edit_artist($artist_id, $genre, $artist_name, $name, $short_bio, $full_bio, $booking, $instruments , $website, $town, $software, $cover){

		 //echo $artist_id;
		 //echo $account_id;
		 
		  //if(($account_id == NULL)|($artist_id == NULL)){ return 0;}
		 
			include("_connect.php");
			
			@ $db = mysql_pconnect($SERVER ,$USERNAME,$PASSWORD);

			if(!$db){ 	echo"can't access database"; exit;}
			
			mysql_select_db($DATABASE_NAME);
		
			$thumbnail;
			$album_cover;
		
		////////////////////			
		//	$thumbnail;   //
		////////////////////
		//echo $account_id;
		//echo $artist_id;
		
		$query 			= "select * from UML_ARTIST_PROFILES where artist_id = '$artist_id'";
		$result 		= mysql_query($query);
		$artist_row		= mysql_fetch_object($result);
		
		$query1 			= "select * from uml_artists where artist_id = '$artist_id'";
		$result1 		= mysql_query($query1);
		$row			= mysql_fetch_object($result1);
		
		$album_secret_folder 	= "uml_artists/img/artists";
		
		if($name 		== NULL){ $name 		=  $artist_row->name;}
		if($town 		== NULL){ $town 		=  $artist_row->town;}
		if($booking 	== NULL){$booking 	= $artist_row->booking_details;}
		if($website 	== NULL){$website 	= $artist_row->website;}
		if($instruments == NULL){$instruments = $artist_row->instruments;}
		if($full_bio == NULL ){ $full_bio = $artist_row->biography; }
		
		if($short_bio == NULL ){ $short_bio = $row->status; }
		if($artist_name == NULL ){ $artist_name = $row->artist_name; }
		if($genre == NULL ){ $genre = $row->genres; }
		
		 $full_bio = mysql_real_escape_string( $full_bio );
		 $short_bio = mysql_real_escape_string( $short_bio);
		 
		
		if($cover != NULL){
		
				$file1 = "uml_artists/img/artists/$row->picture";
				$file2 = "uml_artists/img/artists/$row->thumbnail";
		
				if($row->picture 	!= "user.jpg"){ 	if(file_exists($file1)){unlink($file1);}}
				if($row->thumbnail 	!= "_user.jpg"){	if(file_exists($file2)){unlink($file2);}}
				
		
				$thumbnail 				=  generate_thumbnail_aa($cover, 50 , $album_secret_folder, 0);
				$album_cover			=  generate_thumbnail_aa($cover, 200, $album_secret_folder, 0);
				
				
			}else{
			
		$thumbnail 		= $row->thumbnail;
		$album_cover 	= $row->picture;
		
			}
			
$query = "update UML_ARTISTS set status = '$short_bio', thumbnail = '$thumbnail', picture = '$album_cover' , artist_name = '$artist_name', genres = '$genre' where artist_id = '$artist_id'";
	
	$result 			= 	mysql_query($query);
		
$query = "update UML_ARTIST_PROFILES set name = '$name', booking_details = '$booking', town = '$town', website = '$website', biography = '$full_bio', software = '$software' , instruments = '$instruments' where artist_id = '$artist_id'";
	
	$result 			= 	mysql_query($query);
	
	if( $result ){ return 1;}else{ return 0;}	

}

function remove_video($account_id, $video_id){

	 	if($account_id == NULL ){return 0;}
	 
	 		include("_connect.php");
			
			@ $db = mysql_pconnect($SERVER ,$USERNAME,$PASSWORD);

			if(!$db){ 	echo"can't access database"; exit;}
			
			mysql_select_db($DATABASE_NAME);
	 		$query 				= "delete from uml_artist_videos where video_id='$video_id'";
			$result 			= mysql_query($query);
			if($result){	return true;	}else{	return false; }
			
}

////////////////

function upload_article($article ,$artist_id , $author, $video_link, $img, $publish_state , $summary, $article_title){

	//////////////////////////////check if data is loaded/////////////////////////////////////////////////////
		if($artist_id == NULL){return 0;}
		if($article == NULL){return 0;}
		if($author == NULL){$author = 'Anonymous';}
		if($article_title == NULL){$article_title = 'Untitled by $author';}
		
		include("_connect.php");
		$letters = "ABCDEFGHIJKLMNOPRQSTUVWXYZ";
		
		if($article == NULL){echo "<p>No data loaded</p>"; return 0;}
		
		$article_date 			= date('Y-m-d G:i:s');
		$summary 				=  addslashes($summary);
		
			$thumbnail;
			$picture;
				
		$secret_folder 		= "uml_articles/img";
		
		if($img != NULL){
		
				$thumbnail 				=  generate_thumbnail_aa($img, 50, $secret_folder, 3);
				$picture				=  generate_thumbnail_aa($img, 200, $secret_folder, 3);
					
		 }
			
	///////////////////////////////// connection //////////////////////////////////////////////////////////////////	
			
		
 		@ $db = mysql_pconnect($SERVER ,$USERNAME,$PASSWORD);

			if(!$db){ 	echo"can't access database"; exit;}
			
			mysql_select_db($DATABASE_NAME);

			$article_text 			=  mysql_real_escape_string($article);
		
			$query 		= "insert into UML_ARTIST_ARTICLES values ('$artist_id', NULL ,'$author', '$article_date', '$publish_state', '$article_text', '$picture', '$thumbnail', '$video_link', '$summary', '$article_title')";
			
			$result = mysql_query($query);

			if($result){	return true;	}else{	return false; }
			
	}
	
	///////////////////////
	
function upload_photo($account_id ,$artist_id, $img, $photo_name, $content_size){
		
		//session_start();
		
		include("_connect.php");
		
		/////////////////////////////////check if data is loaded/////////////////////////////////////////////////////
		if($account_id == NULL){return 0;}
		if($img == NULL){echo "<p> No image data</p>"; return 0;}
		if($content_size == 0){echo "<p> Mp3 file has zero file size</p>"; return 0;}
		
		/////////////////////////////////////////////////////////////
		
		@ $db = mysql_pconnect($SERVER ,$USERNAME,$PASSWORD);

			if(!$db){ 	echo"can't access database"; exit;}
			
			mysql_select_db($DATABASE_NAME);
	
			
	//////////////////////////////////////		
				$secret_folder 		= "artist_images";
		
				$photo_file			= generate_thumbnail_aa($img, 400, $secret_folder, 4);
				$thumbnail 			= generate_thumbnail_aa($img, 200, $secret_folder, 4);
				$tiny_thumbnail 	= generate_thumbnail_aa($img, 50, $secret_folder, 4);
				
				$photo_name 			= mysql_real_escape_string($photo_name);
				$post_date = date('Y-m-d G:i:s');
				
		
		//////////////////////////////////	get key music folder and alias
		
		
		///////////////////////////////// connection
		
	
		$query 	= "insert into uml_artist_photos values ('','$artist_id','$photo_name', '$photo_file', '$thumbnail', '$tiny_thumbnail', '','$post_date')";
			
			$result 	= mysql_query($query);
			
			if($result){	return true;	}	else{	return false; }
		
	}


?>