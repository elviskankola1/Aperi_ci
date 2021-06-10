<?php
session_start();
include "../../../connectDB.php";
if(isset($_SESSION['seminarID'])){
	if(secure($_POST['action']) == "verifyTicket"){
	$val = secure($_POST['val']);
	$msg = "";
	$sql = "SELECT * FROM ngomaTickets WHERE ticketCode ='".$val."' AND ticketSeminar='".$_SESSION['seminarID']."' ";
	  $result = mysqli_query($con, $sql);
	  $queryResult = mysqli_num_rows($result);
	  if($queryResult > 0 ){

		  while ($row = mysqli_fetch_array($result)){
		  		if($row['ticketStatus'] == 1){
		  			$msg = '<div class="alert alert-success"><b>Ticket Verified</b> proceed to enter.</div>';
			  	}else{
			  		$msg = '<div class="alert alert-warning"><b>Ticket Found</b> This ticket was already used. '.$_SESSION['seminarID'].'</div>';
			  	}
		  		 $sql = "UPDATE ngomaTickets SET ticketStatus = '2' WHERE ticketID='".$row['ticketID']."'";
		  		 if(mysqli_query($con, $sql)){
		  		 	$formData = '
		  				<tr>
	                      <td>'.$row['ticketBuyer'].'</td>
	                      <td>'.$row['ticketBuyerEmail'].'</td>
	                      <td>'.$row['ticketDatePurchased'].'</td>
	                    </tr>
		  			'; 	
		  
					  $alert = $msg;
		  		 }
		  		} 
		  		
		}else{
			$formData = '<tr>
	                      <td>Non</td>
	                      <td>Non</td>
	                      <td>Non</td>
	                    </tr>';
			$alert = '<div class="alert alert-danger"><b>Oh snap!</b> Ticket Does Not Exist under this event.</div>';
		}

		$data = array('formData' => $formData, 'alert' => $alert);
		echo json_encode($data);
	}




}else{
	$formData = '<tr>
              <td>Non</td>
              <td>Non</td>
              <td>Non</td>
            </tr>';
$alert = '<div class="alert alert-danger"><b>Oops!</b> Please enter password for this seminar</div>';
$data = array('formData' => $formData, 'alert' => $alert);
		echo json_encode($data);
}


function secure($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

