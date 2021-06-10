<?php
include "../../../connectDB.php";


if(secure($_POST['action']) == "fetchSeminar"){
$sql = "SELECT * FROM podcast INNER JOIN ngomaFacilitators ON ngomaFacilitators.facilitatorID = podcast.podcastAuthour";
  $result = mysqli_query($con, $sql);
  $queryResult = mysqli_num_rows($result);
  if($queryResult > 0 ){
  	$status;
	  while ($row = mysqli_fetch_array($result)){

	  
	  	if($row['postcastType']==1){
	  		$status ="<a class='btn btn-success'>Audio</a>";
	  	}elseif($row['postcastType']==2){
	  		$status ="<a class='btn btn-warning'>Video</a>";
	  	}

	  	echo '
	  				<tr>
                     
                      <td>'.$status.'</td>
                      <td><img src="podcast/thumbnails/'.$row['thumbnail'].'" style="height: 3rem"></td>
                      <td>'.$row['podcastTitle'].'</td>
                      <td>'.$row['facilitatorName'].'</td>
                      <td>'.$row['podcastOffering'].'</td>
                     <td>
                      <button class="btn btn-primary btn-sm editSeminar" data-toggle="modal" data-target="#editModal"  data-id="'.$row['podcastID'].'"><i class="fa fa-pencil"></i></button>
                      <button class="btn btn-danger btn-sm deleteSeminar" data-img ="'. $row['podcastFile'].'" data-id="'.$row['podcastID'].'"><i class="fa fa-trash-o "></i></button>
                      </td>
                    </tr>
	  			';

	  }
	}else{echo"
		<h5>There are no podcasts in the database right now. </h5>
	";}
}
if(secure($_POST['action']) == "fetchEditPodcast"){
	$val = secure($_POST['val']);
	$sql = "SELECT * FROM podcast 
	INNER JOIN ngomaFacilitators ON ngomaFacilitators.facilitatorID = podcast.podcastAuthour
	 WHERE podcastID='".$val."' ";
  $result = mysqli_query($con, $sql);
  $queryResult = mysqli_num_rows($result);
  if($queryResult > 0 ){
	  while ($row = mysqli_fetch_array($result)){
    if($row['postcastType'] == 1){
	  		$podType ="Audio";
	  	}else{
	  		$podType ="Video";
	  	}

		?>
			 <div class="modal-body">
                        <div class="row">
                           <div class="col-sm-6">
                            <div class="form-group">
                              <label> Type</label>
                                <select class="form-control" name="postcastType" >   
                                  <option value="<?php echo $row['postcastType'];?>"><?php echo $podType;?></option>
                                   <option value="2">Video</option>
                                  </select>
                            </div>
                           </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>Podcast Title</label>
                              <input type="text" class="form-control" name="podcastTitle" value="<? echo $row['podcastTitle']?>">
                              <input type="hidden" name="podID" value="<?php echo $row['podcastID']?>">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>Author</label>
                               <select class="form-control" name="podcastAuthour"> 
                               <option value="<?=$row['facilitatorID']?>"><?=$row['facilitatorName']?></option> 
                              <?php
                              $sql = mysqli_query($con,"SELECT * FROM ngomaFacilitators");
                              while ($roll= mysqli_fetch_array($sql)) { ?>
                                <option value="<?=$roll['facilitatorID']?>"><?=$roll['facilitatorName']?></option>
                                
                             <?php }

                              ?>
                                 
                                
                              </select>
                            </div>
                           </div>
                           <div class="col-sm-6">
                            <div class="form-group">
                              <label>Podcast Offering</label>
                              <select class="form-control" name="podcastOffering" value="">   
                                <option value="<?=$row['podcastOffering']?>"><?=$row['podcastOffering']?></option>
                                <option value="Leading Yourself"> Leading Yourself</option>
                                <option value="Leading People"> Leading People</option>
                                <option value="Leading Organisations"> Leading Organisations</option>
                                <option value="Life Skills"> Life Skills</option>
                                <option value="Thusa Life Skills"> Thusa Life Skills</option>
                              </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                              <label>thumbnail</label>
                                <input type="file" class="form-control" name="thumbnail" >
                            </div>
                           </div> 
                       <div class="col-sm-6">
                            <div class="form-group">
                              <label>Video or Audio  File</label>
                                <input type="file" class="form-control" name="fileToUpload" >
                            </div>
                           </div>
                       
                       
                 

                        </div>
                       
                  </div>
                  <div class="modal-footer">
                  	 <button type="submit" id="updatePodcast" class="btn btn-primary">Update Podcast</button>
                    <div class="spinner-border" id="spinner" style="display:none;"></div>
                  </div>
<?

	  }
	}else{echo"
		<h3>Seminar Not Found </h3>
	";} 
}




if(isset($_POST['podID'])){
	$id = secure($_POST['podID']);

if (secure(basename( $_FILES["fileToUpload"]["name"])) && basename( $_FILES["thumbnail"]["name"])) {



  $sqll = "SELECT * FROM podcast WHERE podcastID = '".$id."'";

  $result = mysqli_query($con, $sqll);

  if (mysqli_num_rows($result) > 0) {
  // output data of each row
   $roww = mysqli_fetch_assoc($result);

      $Path1 = "../podcast/thumbnails/".$roww['thumbnail'];
      $Path = "../podcast/".$roww['podcastFile'];
      if (file_exists($Path) && file_exists($Path1)){
        unlink($Path1); 
        unlink($Path);     
      } else{
      	echo "No file";
      }

  }else{
  	echo "No result";
  }
$target_dir = "../podcast/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


$dir = "../podcast/thumbnails/";
$target_thumb = $dir . basename($_FILES["thumbnail"]["name"]);
$uploadOk = 1;
$imageFileType2 = strtolower(pathinfo($target_thumb,PATHINFO_EXTENSION));


if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_thumb);
    
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}



				$sql = 'UPDATE podcast SET podcastTitle ="'.secure($_POST['podcastTitle']).'",

				podcastFile="'.secure(basename( $_FILES["fileToUpload"]["name"])).'",
        thumbnail = "'.secure(basename( $_FILES["thumbnail"]["name"])).'",
				postcastType = "'.secure($_POST['postcastType']).'",			
				podcastAuthour ="'.secure($_POST['podcastAuthour']).'",
				podcastOffering ="'.secure($_POST['podcastOffering']).'"

				WHERE podcastID = "'.$_POST['podID'].'"';

				if(mysqli_query($con, $sql)){
					echo "Seminar Updated";

				}else{
					echo mysqli_error($con);
				}
			}else{

				$sql= 'UPDATE podcast SET podcastTitle ="'.secure($_POST['podcastTitle']).'",
				postcastType ="'.secure($_POST['postcastType']).'",			
				podcastAuthour ="'.secure($_POST['podcastAuthour']).'",
				podcastOffering ="'.secure($_POST['podcastOffering']).'"

				WHERE podcastID = "'.$_POST['podID'].'"';

				if(mysqli_query($con, $sql)){
					echo "Podcast updated";

				}else{
					echo mysqli_error($con);
				}
			}
}



if(secure($_POST['action']) == "deletePodcast"){
	$val = secure($_POST['val']);
	$image = secure($_POST['img']);
	if (is_numeric($val) && $val > 0 ) {
		if($image != ''){
			
					$sql = "DELETE  FROM podcast WHERE podcastID = '".$val."' ";
					if(mysqli_query($con, $sql)){
						echo "Podcast successfully deleted";
					}else{
						echo mysqli_error($con);
					}
				
				
		}else{
			echo "System failed to locate the image";
		}
	}else{
		echo "System failed to locate the podcast.";
	}

}

function secure($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
function getFacilitator($con){
  $sql = "SELECT * FROM ngomaFacilitators WHERE  type='1' ";
  $data =  "";
  $result = mysqli_query($con, $sql);
  $queryResult = mysqli_num_rows($result);  
  if($queryResult > 0 ){
  while ($row = mysqli_fetch_array($result)){
    $data .= '<option value="'.$row['facilitatorID'].'">'.$row['facilitatorName'].'</option>';
  }
  }else{
    $data .= '<option value="">No facilitator found</option>';
  }
  return $data;
}
?>