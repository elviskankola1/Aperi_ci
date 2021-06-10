<?php
session_start();
include "../../../connectDB.php";
$output ="";
if(isset($_SESSION['seminarID'])){
	echo 'isset';
}else{
$action = $_POST['action'];
if($action =="login"){
	$password = secure($_POST['password']);
	$seminarID = secure($_POST['seminarID']);

	 if($password !=''){
	 	if($seminarID !=''){
	 		$sql = "SELECT * FROM ngomaSeminars WHERE seminarID ='".$seminarID."'";
			  $result = mysqli_query($con, $sql);
			  $queryResult = mysqli_num_rows($result);
			  if($queryResult > 0 ){
				  while ($row = mysqli_fetch_array($result)){
				  		if(password_verify($password, $row['seminarPassword'])){
		                      $_SESSION['seminarID'] = $row['seminarID'];
		                      echo "isset";
		              }else{
		                echo'Incorrect Password';
		              }
				  		
				  	}
				  }else{
				  	echo  "sermon not found";
				  }
		 }else{
		 	echo "sermon not recognized";
		 }
	 }else{
	 	echo "please enter your password";
	 }
		
	}
}	


function secure($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>