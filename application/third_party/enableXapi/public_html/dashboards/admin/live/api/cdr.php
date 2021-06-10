<?php 
require("config.php");
include "../connectDB.php";


   

	/* CURL POST Request */
//get roomId of events in the last 2 hours

$sql = "SELECT *
FROM classRoom

where cast(scheduledDate as datetime)  >= date_add(now(),interval -2 hour)
and cast(scheduledDate as datetime)  <= now()";
$query = mysqli_query($conn, $sql);
 $num = mysqli_num_rows($query);

while($row = mysqli_fetch_array($query)){


$headers = array(
    'Content-Type: application/json',
    'Authorization: Basic '. base64_encode(APP_ID . ":". APP_KEY)
  );
   
	$ch = curl_init(API_URL."/cdr/room/".$row['roomID']);

	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	$response = curl_exec($ch);

	curl_close($ch);

    $obj = (array)json_decode($response);

   $data = (array)$obj['cdr'];

   echo $rooms =count($data);



  for($count = 0; $count < $rooms; $count++){

  $obj = (array)json_decode($response);

   $data = (array)$obj['cdr'];

   $data1 = (array)$data[$count];

   $room = (array)$data1['room'];

   $room_details = (array)$room['room_details'];
   $roomID= (array)$room['room_id'];

   $user = (array)$data1['user'];

   $connectMinutes = (array)$data1['usage'];

   $settings = (array)$room_details['settings'];



   $callSeconds =  $connectMinutes['connect_minutes'];
  


   //variables to insert

    $scheduledDate = $settings['scheduled_time'];

    $participants = $settings['participants'];


    $userName = $user['name'];

    $callSeconds =  $connectMinutes['connect_minutes'];


 

    $sql1 = "INSERT INTO cdr(user,participants,minutes,scheduledDate,roomID)
     values('".$row['userID']."','".$participants."','".$callSeconds."','".date('Y-m-d H:i:s',strtotime($scheduledDate))."','".$roomID[0]."')";
    $query1 = mysqli_query($conn,$sql1);
   
    }
}



?>