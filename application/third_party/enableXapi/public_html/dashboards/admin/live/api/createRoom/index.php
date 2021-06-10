<?php
header('location:../../../createRoom.php?room=true&end='.$_POST['end'].'&time='.$_POST['time'].'');
session_start();

require("../config.php");
require("../error.php");

              

$con = mysqli_connect("sql7.cpt2.host-h.net","ngomaxycda_1","T60gdR29pWiB21Vc8OHd","ngomaxycda_db1");
  if(!$con){
      echo "System Under Maintenance. Visist again in 20 minutes ";
  }






//header("Content-type: application/json");
if($_SERVER['REQUEST_METHOD'] != 'POST') {
  $error = $ARR_ERROR["5001"];          // JSON Format issues
  $error["desc"] = "HTTP POST Requests only";
  $error = json_encode($error);
  print $error;
  exit;
  
}


                


$ret = CreateRoom();


//write to database


 $roomName = $ret[0]['name'];
 $serviceID = $ret[0]['service_id'];
 $referrence = $ret[0]['owner_ref'];

 $roomID = $ret[0]['room_id'];
 $mode = $ret[2]['mode'];
 $duration = $ret[2]['duration'];
 $participants = $ret[2]['participants'];
 $auto_recording = true;
 $moderators = $ret[2]['moderators'];

 /*if(!$roomID){

  echo"<script>window.location='../../../createRoom.php';</script>";

  exit;

 }*/




$random_pat_pin = rand(100000, 999999);

$random_moderator_pin = rand(100000, 999999);
$studentPin = rand(100000, 999999);

function generateRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrs092u3tuvwxyzaskdhfhf9882323ABCDEFGHIJKLMNksadf9044OPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$roomOTP = generateRandomString(6);




 $sql = "INSERT INTO classRoom(roomID, roomName, roomPin, roomOTP, studentPin, scheduledDate, status, userID, moduleID, facilitatorID) 
 value('".$roomID."', 
 '".$_POST['roomName']."', 
 '".$random_moderator_pin."',
 '".$roomOTP."',
 '".$studentPin."',
'".$_POST['date']." ".$_POST['time']."',
'0',
'".$_SESSION['adminID']."',
'".$_POST['module']."',
'".$_POST['facilitator']."')";
 $query = mysqli_query($con, $sql);
 


//Send email to moderator with room details and credentials
  $sql3="SELECT * FROM ngomaFacilitators WHERE facilitatorID =".$_POST['facilitator']." ";
    $query3 = mysqli_query($con, $sql3);
    while($row = mysqli_fetch_array($query3)){
        $to = $row["facilitatorEmail"] ;
        $subject = "Virtual Meeting created";
        $txt = "Hi!\n";
        $txt  = "You have created  ".$_POST['roomName']." virtual meeting. The following information can be used to login ";
        $txt .= "\nRoomID : ".$roomOTP;
        $txt .= "\nFacilitator Room Pin : ".$random_moderator_pin;
        $txt .= "\nStudent Room Pin : ".$studentPin;
        $txt .= "\n\nhttps://www.ngomacommunications.com/live/index.php?id=".$roomOTP."&roomPin=".$random_moderator_pin."&name=Facilitator";
        $txt .= "\n\n\nhttps://www.ngomacommunications.com/live/index.php?id=".$roomOTP."&roomPin=".$studentPin."&name=Participant";
        $headers = "From: noreply@ngomacommunications.com";
        mail($to,$subject,$txt,$headers);

    }
    
  



  
  ###############################################




    
  // Send email to moderator with room details and credentials
/*$to =  $_SESSION['eventsAdminEmail'];
  $subject = "Virtual Event created";
  $txt = "Hello!\n";
  $txt  = "You have created  ".$_POST['roomName']." virtual event. Please use the following details to login on this event:";
  $txt .= "\nUsername: Admin";
  $txt .= "\nRoomID : ".$roomOTP;
  $txt .= "\nFacilitator Room Pin : ".$random_moderator_pin;
  $txt .= "\nParticipant Room Pin : ".$studentPin;
  $txt .= "\nPlease note that the room will be activated 15 min before ".$_POST['date']." ".$_POST['time']." event starting time.";
 $txt .= "\nhttps://ellespourelles.org/dash/live/index.php?id=".$roomOTP."&roomPin=".$random_moderator_pin."";
  $headers = "From: events@ellespourelles.org";
  mail($to,$subject,$txt,$headers);*/
  ###############################################


 




//$sql = "SELECT * FROM eventTickets inner join event_registrants on eventTickets.registrant_id = event_registrants.reg_id where eventTickets.registrant_id = ".$_POST['event']." ";
  
/*$sql = "SELECT * FROM `event_registrants` INNER JOIN classRoom ON classRoom.moduleID=event_registrants.event_id  where classRoom.moduleID = ".$_POST['event']." ";

$query = mysqli_query($con, $sql);
$participants1 = mysqli_num_rows($query);
while($row = mysqli_fetch_array($query)){
  
  $to = $row['email'];
  $subject = "Virtual Event invitation";
  $txt = "Hello!\n";
  $txt  = "You have been invited to ".$_POST['roomName']." virtual event. Please use the following details to login on this event: ";
  $txt .= "\nUsername: ".$row['name']."";
  $txt .= "\nRoomID : ".$roomOTP;
  $txt .= "\nYour Room Pin : ".$studentPin;
    $txt .= "\nPlease note that the room will be activated 15 min before ".$_POST['date']." ".$_POST['time']." event starting time.";
  $txt .= "\nhttps://ellespourelles.org/dash/live/index.php?id=".$roomOTP."&roomPin=".$studentPin."";
  $headers = "From: events@ellespourelles.org";
  mail($to,$subject,$txt,$headers);
  ###############################################


}*/




//echo"<script>window.location='../../../eventsRoom.php';</script>";







  

function  CreateRoom()
{ GLOBAL $ARR_ERROR;

  $random_name = rand(100000, 999999);



  //schduled time 
    $dateold = $_POST['date'];
     $time   = $_POST['time'];

    $currentTime = strtotime("".$dateold." ".$time."");
   
  //The amount of hours that you want to add.
  $hoursToAdd = -2;
   
  //Convert the hours into seconds.
  $secondsToAdd = $hoursToAdd * (60 * 60);
   
  //Add the seconds onto the current Unix timestamp.
  $newTime = $currentTime + $secondsToAdd;

   

  $date =  date("Y-m-d H:i:s", $newTime);


  //duration

  // Calculating duration of the online session
    $time1 = $_POST['time'];
    $time2 = $_POST['end'];
    $array1 = explode(':', $time1);
    $array2 = explode(':', $time2);

    $minutes1 = ($array1[0] * 60.0 + $array1[1]);
    $minutes2 = ($array2[0] * 60.0 + $array2[1]);

    $diff = $minutes2 - $minutes1;



  /* Create Room Meta */
    $Room = Array(
    "name"      => "Sample Room: ". $random_name,
    "owner_ref"   => $random_name,
    "settings"    => Array(
        "description" => "",
        "quality"   => "SD",
        "mode"      => "group",
        "participants"  => "10",
        "duration"    => "".$diff,
        "scheduled"   => true,
        "scheduled_time" => "".$date,
        "auto_recording"=> false,
        "active_talker" => true,
        "wait_moderator"=> false,
        "adhoc"     => false,
        "canvas"    => true
        ),
           "sip"    => Array(
        "enabled"   => false
        )
  );

   $Room_Meta = json_encode($Room);



  
  /* Prepare HTTP Post Request */

  $headers = array(
    'Content-Type: application/json',
    'Authorization: Basic '. base64_encode(APP_ID . ":". APP_KEY)
  );

  /* CURL POST Request */

  $ch = curl_init(API_URL."/rooms");

  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $Room_Meta);
  $response = curl_exec($ch);

  curl_close($ch);

  $obj = (array)json_decode($response);


  $room = (array)$obj['room'];

  $sip = (array)$obj['sip'];

  $settings = (array)$room['settings'];

  $event = array($room,$sip, $settings);


   
return $event;   


}

?> 