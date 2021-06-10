<?php
include "../../../connectDB.php";
if(secure($_POST['action']) == "createOffshelf"){
	if(secure($_POST['programmeName']) !=''){
	  if(secure($_POST['programmeDescription']) !='' ){
	  		if(secure($_POST['fees']) !=''){
	  			if(secure($_POST['programmeTarget']) !=''){
	  					if(secure($_POST['programmeOffering']) !=''){
	  						if(secure($_POST['duration']) !=''){
						$sql = 'INSERT INTO offTheShelf (programmeName, programmeOffering, programmeDescription, programmeTopics, programmetarget, fees, duration)
						VALUES ( "'.secure($_POST['programmeName']).'", "'.secure($_POST['programmeOffering']).'", "'.secure($_POST['programmeDescription']).'", "'.secure($_POST['programmeTopics']).'", "'.secure($_POST['programmeTarget']).'", "'.secure($_POST['fees']).'", "'.secure($_POST['duration']).'")';
		                if(!mysqli_query($con, $sql)){
		                 echo mysqli_error($con);
		                }else{
		                  echo"Programme successfully created.";
		                } 
		            }else{
		            	echo "Please add duration of the seminar";
		            }
			 	  }else{
				    echo "Please Select a valid offering";
				  }	
			}else{
		    echo "Please enter the target audince";
		  }				
	  }else{
	    echo "Please enter fees/person";
	  }
	}else{ 
	echo "Please Enter Description.";
	}
  }else{ 
	echo "Please Enter Programme  Name.";
	}	
}


if(secure($_POST['action']) == "fetchProgramme"){
$sql = "SELECT * FROM offTheShelf";
  $result = mysqli_query($con, $sql);
  $queryResult = mysqli_num_rows($result);
  if($queryResult > 0 ){
	  	$i ="";
	  	$key ="";
	  	
	  while ($row = mysqli_fetch_array($result)){
	  			if($row['programmeOffering'] == 'LO'){
	  		$key =" Leading People";
		  	}elseif($row['programmeOffering'] == 'LS'){
		  		$key ="Leading Yourself";
		  	}elseif($row['programmeOffering'] == 'LB'){
		  		$key ="Leading Organisations";
		  	}
		  	$i++;
	  		echo '

	  				<tr>
                      <td>'.$i.'</td>
                      <td>'.$row['programmeName'].'</td>
                      <td>'.$key.'</td>
                      <td>R '.number_format($row['fees'], 2).'</td>
                      <td>'.$row['duration'].'</td>
                      <td>
                      	<button class="btn btn-primary btn-sm editProgramme" data-toggle="modal" data-target="#editModal"  data-id="'.$row['seminarID'].'"><i class="fa fa-pencil"></i></button>
                      <button class="btn btn-danger btn-sm deleteSeminar"  data-id="'.$row['seminarID'].'"><i class="fa fa-trash-o "></i></button>
                      </td>
                    </tr>
	  			';
	  }
	}else{
		echo '<h3>There are No off-the-shelf seminars in the database.</h3>';
	}
}
if(secure($_POST['action']) == "fetchEditProgramme"){
	$val = secure($_POST['val']);
	$sql = "SELECT * FROM offTheShelf WHERE seminarID = '".$val."' ";
	  $result = mysqli_query($con, $sql);
	  $queryResult = mysqli_num_rows($result);
	  if($queryResult > 0 ){
		  	$status ="";
		  while ($row = mysqli_fetch_array($result)){
		  		echo '
		  				<div class="modal-body">
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>Programme Name</label>
                              <input type="text" class="form-control" value="'.$row['programmeName'].'" name="programmeName" required="">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>Offering type</label>
                                <select class="form-control" name="programmeOffering"> 
                                   <option value="">Please Select Offering</option>
                                    <option value="LS">Leading Yourself</option>
                                    <option value="LO">Leading People</option>
                                    <option value="LB">Leading Organisations</option>
                                </select>
                            </div>
                           </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group">
                              <label>Seminar Description</label>
                              <textarea class="form-control"  rows="4" name="programmeDescription">'.$row['programmeDescription'].'</textarea>
                            </div>
                           </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group">
                              <label>Who should attend</label>
                                <textarea class="form-control"  rows="3"  name="programmeTarget">'.$row['programmetarget'].'</textarea>
                                <input type="hidden" name="action"  value="updateOffshelf" required="">
                                <input type="hidden" name="val"  value="'.$row['seminarID'].'" required="">
                            </div>
                           </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>Duration</label>
                              <input type="text" max="100" class="form-control" value="'.$row['duration'].'" name="duration" required="">
                            </div>
                          </div>
                           <div class="col-sm-6">
                            <div class="form-group">
                              <label>Fees/Person</label>
                             <input type="number" class="form-control" value="'.$row['fees'].'" name="fees" required="">
                            </div>
                          </div>
                        </div>
                        
                        
                  </div>
                  <div class="modal-footer">
                 	 <button type="submit" class="btn btn-primary">Save Seminar</button>
					<div class="spinner-border" id="spinner" style="display:none;"></div>

                  </div>
		  			';
		  }
		}else{
			echo '<h3>This event is NOT in the database.</h3>';
		}
}

if(secure($_POST['action']) == "updateOffshelf"){
	$val =  secure($_POST['val']);
	if(secure($_POST['programmeName']) !=''){
	  if(secure($_POST['programmeDescription']) !='' ){
	  		if(secure($_POST['fees']) !=''){
	  			if(secure($_POST['programmeTarget']) !=''){
	  					if(secure($_POST['programmeOffering']) !=''){
	  						if(secure($_POST['duration']) !=''){
						$sql = 'UPDATE offTheShelf SET programmeName = "'.secure($_POST['programmeName']).'",  
										   programmeOffering = "'.secure($_POST['programmeOffering']).'", 
										   programmeDescription = "'.secure($_POST['programmeDescription']).'",
										   programmetarget = "'.secure($_POST['programmeTarget']).'",
										   fees = "'.secure($_POST['fees']).'",
										   duration = "'.secure($_POST['duration']).'"
										   WHERE seminarID = "'.$val .'"
										     ';
										    if(mysqli_query($con, $sql)){
										    	echo "successfully Updated";
										    }else{
										    	echo mysql_error($con);
										    }
		               
		            }else{
		            	echo "Please add duration of the seminar";
		            }
			 	  }else{
				    echo "Please Select a valid offering";
				  }	
			}else{
		    echo "Please enter the target audince";
		  }				
	  }else{
	    echo "Please enter fees/person";
	  }
	}else{ 
	echo "Please Enter Description.";
	}
  }else{ 
	echo "Please Enter Programme  Name.";
	}	
}


if(secure($_POST['action']) == "deleteSeminar"){
	$val = secure($_POST['val']);
	if (is_numeric($val) && $val > 0 ) {
		$sql = "DELETE  FROM offTheShelf WHERE seminarID = '".$val."' ";
		if(mysqli_query($con, $sql)){
			echo "Seminar Successfully Deleted";
		}else{
			echo mysqli_error($con);
		}
	}else{
		echo "System failed to locate the seminar.";
	}

}

function secure($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

