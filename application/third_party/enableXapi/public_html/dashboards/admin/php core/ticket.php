<?php
include "../../../connectDB.php";

if(secure($_POST['action']) == "verifyTicket"){
	$val = secure($_POST['val']);
$sql = "SELECT * FROM ngomaTickets WHERE ticketCode ='".$val."' ";
  $result = mysqli_query($con, $sql);
  $queryResult = mysqli_num_rows($result);
  if($queryResult > 0 ){
	  while ($row = mysqli_fetch_array($result)){
	  		$formData = '
	  				<tr>
                      <td>'.$row['ticketBuyer'].'</td>
                      <td>'.$row['ticketBuyerEmail'].'</td>
                      <td>'.$row['ticketDatePurchased'].'</td>
                    </tr>
	  			'; 	
	  }
	  $alert = '
	  			<div class="alert alert-success"><b>Ticket Verified</b> May proceed to enter.</div>
	  ';
	}else{
		$formData = '<tr>
                      <td>Non</td>
                      <td>Non</td>
                      <td>Non</td>
                    </tr>';
		$alert = '<div class="alert alert-danger"><b>Oh snap!</b> Ticket Does Not Exist.</div>';
	}

	$data = array('formData' => $formData, 'alert' => $alert);
	echo json_encode($data);
}

if(secure($_POST['action']) == "fetchSeminar"){
$sql = "SELECT * FROM ngomaSeminars 
INNER JOIN ngomaFacilitators ON ngomaFacilitators.facilitatorID = ngomaSeminars.seminarFacilitator";
  $result = mysqli_query($con, $sql);
  $queryResult = mysqli_num_rows($result);
  if($queryResult > 0 ){
  	$i = "";
	  while ($row = mysqli_fetch_array($result)){
	  	$i++;
	  	$key ="";
	  	if($row['seminarOffering'] =="LO"){
	  		$key ="<span class='badge badge-danger'> leading People </span>";
	  	}elseif($row['seminarOffering'] =="LS"){
	  		$key ="<span class='badge badge-danger'> Leading Yourself</span>";
	  	}elseif($row['seminarOffering'] =="LB"){
	  		$key ="<span class='badge badge-danger'> Leading Organisations</span>";
	  	}

	  		echo '
	  				<tr>
                      <td>'.$i.'</td>
                      <td><img src="../../../images/events/'.$row['seminarPhoto'].'" style="width:50px; height:50px; border-radius:50%; object-fit:cover;" /> </td>
                      <td>'.$row['seminarName'].'</td>
                      <td>'.$row['seminarDate'].'</td>
                      <td>R '.number_format($row['seminarPrice'], 2).'</td>
                      <td>'.$row['facilitatorName'].'</td>
                      <td>'.$key.'</td>
                      <td style="text-align:center;">'.fetchTicketNumber($con, $row['seminarID']).'</td>
                      <td>
                      <button class="btn btn-primary  viewSeminar" data-toggle="modal" data-target="#myModal"  data-id="'.$row['seminarID'].'">view tickets</button>
                      </td>
                    </tr>
	  			';

	  }
	}else{echo"
		<h3>There are no seminars in the database right now. </h3>
	";}
}
if(secure($_POST['action']) == "fetchTickets"){
	$seminar = $_POST['seminarID'];
	$status ='';
$sql = "SELECT * FROM ngomaTickets WHERE ticketSeminar = '".$seminar."' ";
	  $result = mysqli_query($con, $sql);
	  $queryResult = mysqli_num_rows($result);
	$i = "";
  if($queryResult > 0 ){
	  while ($row = mysqli_fetch_array($result)){
	  	if($row['ticketStatus'] ==1){
	  		$status ='<button class="btn btn-xs btn-success">Active</button> ';
	  	}else{
	  		$status ='<button class="btn btn-xs btn-danger">Used</button> ';
	  	}
	  	$i++;
	  		echo '
	  				<tr>
                      <td>'.$i.'</td>
                      <td>'.$row['ticketCode'].'</td>
                      <td>'.$row['ticketSeminarName'].'</td>
                      <td>'.$row['ticketBuyer'].'</td>
                      <td>'.$row['ticketBuyerEmail'].'</td>
                      <td>'.$row['ticketDatePurchased'].'</td>
                      <td>'.$row['ticketContact'].'</td>
                      <td>'.$status .'</td>
                    </tr>
	  			';

	  }
	}else{echo"
		<h3>No bookings yet.</h3>
	";}
}


function fetchTicketNumber($con, $seminar) {
	$sql = "SELECT * FROM ngomaTickets WHERE ticketSeminar = '".$seminar."' ";
	  $result = mysqli_query($con, $sql);
	  $queryResult = mysqli_num_rows($result);
	  if($queryResult > 0 ){
	  	$result = $queryResult;
	  }else{
	  	$result = "0";
	  }
	  return $result;
}
function secure($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

