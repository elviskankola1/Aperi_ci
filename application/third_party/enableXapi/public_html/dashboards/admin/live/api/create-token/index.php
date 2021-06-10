<?php
session_start();
// Author: Subrat 
// Date: Apr 17, 2019
//
// POST api/create-token
// To create a Token for a given room, name, role
//
// Parameter: None 
// Raw Body: Yes
// Return: Returns Token 
// 



 
require("../config.php");
require("../error.php");







if($_SERVER['REQUEST_METHOD'] != 'POST') {
	$error = $ARR_ERROR["5001"];					// JSON Format issues
	$error["desc"] = "HTTP POST Requests only";
	$error = json_encode($error);
	print $error;
	exit;
}

define("connect", true);

$con = mysqli_connect("sql7.cpt2.host-h.net","ngomaxycda_1","T60gdR29pWiB21Vc8OHd","ngomaxycda_db1");
  if(!$con){
      echo "System Under Maintenance. Visist again in 20 minutes ";
  }

//check details 

$ErrorMessage = "";
$role = "";
$roomID ="";
$name ="";
$class="";

  $meetingID = secure_input($_POST['meetingID']);
  $roomPin = secure_input($_POST['roomPin']);
  $name = secure_input($_POST['nameText']);

  

$now = time();
$ten_minutes = $now + (10 * 60);
$startDate = date('H:i', $now);
$endDate = date('H:i', $ten_minutes);

$currentTime = strtotime("".date('Y-m-d')." ".$endDate."");
 
//The amount of hours that you want to add.
$hoursToAdd = -2;
 
//Convert the hours into seconds.
$secondsToAdd = $hoursToAdd * (60 * 60);
 
//Add the seconds onto the current Unix timestamp.
$newTime = $currentTime + $secondsToAdd;

$test =  date("Y-m-d H:i", $newTime);
        
          //AND startTime =<".$endDate." 

  



function secure_input($data) {
  $data = trim($data);
  $data = htmlspecialchars($data);
  $data = strip_tags($data);
  return $data;
}



//end

/* RAW Body Parsing  */

	$data1 = array("name"=> $name,"role"=>$role,"roomId"=> $roomID,"user_ref" => $name);


$data = json_encode($data1);



//$data = file_get_contents("php://input");

if (!$data)
{	
	$error = json_encode($ARR_ERROR["4001"]);		// JAW JSON Body missing
	print $error;
	exit;
}

$data = json_decode($data);
$json_error = json_last_error();

if ($json_error)	
{	$error = $ARR_ERROR["4003"];					// JSON Format issues
	$error["desc"] = getJSONError($json_error);
	$error = json_encode($error);
	print $error;
	exit;
}

 
if ($data->name && $data->role && $data->roomId)
{	
	$ret = CreateToken($data);
	if ($ret)
	{	
		$result = json_decode($ret,true);

	
	
	echo "<script>window.location.href ='../../room/index.php?token=".$result['token']."&roomId=".$data->roomId."&role=".$data->role."';</script>'";



	}	
}
else
{	
//header('location:../../index.php'); 		
	$error = $ARR_ERROR["4004"];					// Required JSON Key missing
	$error["desc"] = "JSON keys missing: name, role or roomId";	
	$error = json_encode($error);
	print $error;
	exit;
}
 

function  CreateToken($data)
{	GLOBAL $ARR_ERROR;

	/* Create Token Payload */

    $Token = Array(
		"name"			=> $data->name,
		"role"			=> $data->role,
		"user_ref"		=> $data->user_ref
		);
	 

	$Token_Payload = json_encode($Token);

	
	/* Prepare HTTP Post Request */

	$headers = array(
		'Content-Type: application/json',
		'Authorization: Basic '. base64_encode(APP_ID . ":". APP_KEY)
	);

	/* CURL POST Request */

	$ch = curl_init(API_URL."/rooms/". $data->roomId . "/tokens");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $Token_Payload);
	$response = curl_exec($ch);

	curl_close($ch);

	


	 
	return $response;

}

?> 