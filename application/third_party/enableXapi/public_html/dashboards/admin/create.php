<?php
	include '../../connectDB.php';
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$city=$_POST['city'];
   

 $folder="uploads/";
 move_uploaded_file($_FILES["file"]["tmp_name"], "$folder".$_FILES["file"]["name"]);
 $img=basename($_FILES["file"]["name"]);
	$sql = "INSERT INTO `podcast`( `name`, `email`, `phone`, `city`,`file`) 
	VALUES ('$name','$email','$phone','$city','$img')";
	if (mysqli_query($con, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>