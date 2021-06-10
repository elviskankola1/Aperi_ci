<?php
include "../../../connectDB.php";

if(secure($_POST['action']) == "fetchSeminars"){
$sql = "SELECT * FROM ngomaSeminars 
INNER JOIN ngomaFacilitators ON ngomaFacilitators.facilitatorID = ngomaSeminars.seminarFacilitator";
  $result = mysqli_query($con, $sql);
  $queryResult = mysqli_num_rows($result);
  if($queryResult > 0 ){
  	$i = "";
	  while ($row = mysqli_fetch_array($result)){
	  	$i++;
	  		
	  	$i++;
	  	if($row['seminarStatus'] == 1){
	  		$status ="<a class='btn btn-success btn-xs'>Active</a>";
	  	}else{
	  		$status ="<a class='btn btn-warning btn-xs'>Down</a>";
	  	}
	  		echo '
	  				<tr>
                      <td>'.$i.'</td>
                      <td><img src="../../../images/events/'.$row['seminarPhoto'].'" style="width:50px; height:50px; border-radius:50%; object-fit:cover;" /> </td>
                      <td>'.$row['seminarName'].'</td>
                      <td>'.$row['seminarDate'].'</td>
                      <td>'.$row['facilitatorName'].'</td>
                      <td>'.$status.'</td>
                      <td>
                      <button class="btn btn-primary btn-sm getSeminar" data-toggle="modal" data-target="#editModal"  data-id="'.$row['seminarID'].'">Ticket this seminar</button>
                      </td>
                    </tr>
	  			';

	  }
	}else{echo"
		<h3>There are no seminars in the database right now. </h3>
	";}
}

function secure($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>