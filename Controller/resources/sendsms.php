<?php
/*
function sendSMS($numbers, $content)
{
	$data= array(
	"Type"=> "sendparam",
	"Username" => "bonanica",
	"Password" => "QhaweTheChosen1",
	"live" => "true",
	"numto" => $numbers, //comma seperated numbers
	"data1" => $content
	);
	$data = http_build_query($data);

	return do_post_request('http://www.mymobileapi.com/api5/http5.aspx', $data);
}
 */
 
function sendSMS($number,$message) {
	global $db;
	if(strlen($number)>7)
	{
	//SMS READS: 
	  $number = str_replace(" ", "", $number);
		
	  $host = "bulksmsportal.co.za";
		$username = "bonanica";
		$password = "QhaweTheChosen1";
		$message_og = $message;
		// Do some encoding
		$message=str_replace("%","%25",$message);
		$message=str_replace("&","%26",$message);
		$message=str_replace("/","%2F",$message);
		$message=str_replace("<","%3C",$message);
		$message=str_replace(">","%3E",$message);
		$message=str_replace("\"","%22",$message);
		$message=str_replace(" ", "%20", $message);
		
  	//The $data array contains data that must be modified as per the API documentation. The array contains data that you will post to the server
  	$url = "http://www.mymobileapi.com/api5/http5.aspx?";
    $request = $url."Type=sendparam&Username={$username}&Password={$password}&numto={$number}&data1={$message}&live=true";
   // echo $request;die;
		$ch = curl_init();
		$timeout = 5;
		curl_setopt($ch,CURLOPT_URL,$request);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
		$contents = curl_exec($ch);
		curl_close($ch);
	      	
		if($contents)
		{
			 return true;
		}
		else
		{
		 return false;
		}
		 
		return true;
	}
} 
 /*
function do_post_request($url, $data, $optional_headers = null)
{
	$params = array('http' => array(
                  'method' => 'POST',
                  'content' => $data
               ));
     if ($optional_headers !== null) {
        $params['http']['header'] = $optional_headers;
     }
     $ctx = stream_context_create($params);
     $fp = @fopen($url, 'rb', false, $ctx);
     if (!$fp) {
        throw new Exception("Problem with $url, $php_errormsg");
     }
     $response = @stream_get_contents($fp);
     if ($response === false) {
        throw new Exception("Problem reading data from $url, $php_errormsg");
     }
     $response;
     return formatXmlString($response);
}
  
function formatXmlString($xml) 
{  
  $xml = preg_replace('/(>)(<)(\/*)/', "$1\n$2$3", $xml);
  
  $token      = strtok($xml, "\n");
  $result     = ''; // holds formatted version as it is built
  $pad        = 0; // initial indent
  $matches    = array(); // returns from preg_matches()
  
  while ($token !== false):
  
    if (preg_match('/.+<\/\w[^>]*>$/', $token, $matches)): 
      $indent=0;
    elseif (preg_match('/^<\/\w/', $token, $matches)):
      $pad--;
    elseif (preg_match('/^<\w[^>]*[^\/]>.*$/', $token, $matches)):
      $indent=1;
    else:
      $indent = 0; 
    endif;
    
    $line    = str_pad($token, strlen($token)+$pad, ' ', STR_PAD_LEFT);
    $result .= $line . "\n"; // add to the cumulative result, with linefeed
    $token   = strtok("\n"); // get the next token
    $pad    += $indent; // update the pad size for subsequent lines    
  endwhile; 
  
  return $result;
}
*/
