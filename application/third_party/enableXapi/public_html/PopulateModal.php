<?php
session_start();

$results = "";
include "connectDB.php";
if(isset($_POST['action'])){
	if($_POST['action'] == "PopulateModal"){
		$s =$con->query("
		 SELECT * FROM ngomaSeminars
			INNER JOIN ngomaFacilitators ON ngomaFacilitators.facilitatorID = ngomaSeminars.seminarFacilitator
			WHERE ngomaSeminars.seminarID  ='".$_POST['contentId']."' 
		 ");			
			if($s->num_rows>0){
                    $profile_pic ="";
                    $key = "";
					if($row['seminarOffering'] == "LS"){
						$key = '<i class="far fa-compass" style="background-color: red; color:white;"></i>';
					}elseif($row['seminarOffering'] == "LO"){
						$key = '<i class="far fa-compass" style="background-color: blue; color:white;"></i>';
					}elseif($row['seminarOffering'] == "LB"){
						$key = '<i class="far fa-compass" style="background-color:#4caf50; color:white;"></i>';
					}else{
						$key = "";
					}		
                    
					$time = date("h:i a", strtotime($row['seminarStartTime'])).' - '.date("h:i a", strtotime($row['seminarEndTime']));

				while($row = $s->fetch_assoc()){
				$_SESSION['Price'] = $row['seminarPrice'];
				$results .=' 
				<h6 style="font-weight:300; text-align:center;">'.$row['seminarName'].'  '.$key.'</h6>
				<a class="close" href="javascript:void(0)">&times;</a>				
				<div class="content ">
						<div class="raw" style="width:100%; ">
							<img src="images/events/'.$row['seminarPhoto'].'" alt="image" style="width:100%; height:auto;"/>
						<div class="raw">
						
						<div class="raw">
						<p class="coll"> <i class="fas fa-ticket-alt"></i> R'.$row['seminarPrice'].' </p> 
						<p class="coll"> <i class="fa fa-calendar"> </i> '.date_format(date_create($row['seminarDate']),"D jS M, Y").'</p>
						<p class="coll" style="text-align: center;"> <i class="fa fa-clock"> </i> '.date("h:i a", strtotime($row['seminarStartTime'])).' - '.date("h:i a", strtotime($row['seminarEndTime'])).'</p>
					</div>
					<div class="coll4">
						<h6 style="font-weight:300;">Description</h6>
						<p>'.nl2br($row['seminarDescription']).'</p>
					</div>
					<!--div class="coll4">
						<h6 style="font-weight:300;">Seminar Outline</h6>
						<p>'.nl2br($row['seminarOutline']).'</p>
					</div-->
					<div class="coll4">
						<h6 style="font-weight:300;">Who Should Attend?</h6>
						<p>'.nl2br($row['seminarTarget']).'</p>
					</div>

					<div class="coll4">
						<h6 style="font-weight:300;">Place</h6>
						<p>'.nl2br($row['seminarVenue']).'</p>
					</div>
					<div class="coll4">
						<h6 style="font-weight:300;">Duration</h6>
						<p>'.nl2br($row['seminarDuration']).'</p>
					</div>
					<div class="coll4">
						<h6 style="font-weight:300;">Country</h6>
						<p>'.$row['seminarCountry'].'</p>
					</div>
					<h6 style="font-weight:300;">Facilitator</h6>
					<div class="mycard">						
						<div class="raw">
							<div class="coll2">
							<img  src="fr/images/profiles/'.$row['facilitatorImg'].'" alt="image" style="width: 50px;height:50px;object-fit:cover; margin-bottom: 2%; border-radius:50%;"><p style="line-height:1;">'.$row['facilitatorName'].'</p> <br>
							<form action="facilitator.php" method="POST" >
							<input type="hidden" value="'.$row['ks_name'].'" name="facilitator" />
							<button type="submit" style="text-align:left;">'.$row['ks_name'].'</button>
							</form>
							</div>
							<div class="coll3">'.substr($row['facilitatorDescription'], 0, 350).'..
							 <form action="facilitator.php" method="POST" target="_black">
	                        <input type="hidden" value="'.$row["facilitatorID"].'" name="facilitator" />
	                        <button type="submit">Read More</button> 
	                        </form>
						</div>
					</div>

					<div class="flex" style="padding-top: 5%; ">
						<form action="booking/" method="post">
						<input type="hidden" value="'.$row['seminarID'].'" name="seminarID" />
						<input type="hidden" value="'.$row['seminarName'].'" name="seminarName" />
						<input type="hidden" value="'.$row['seminarVenue'].'" name="seminarVenue" />
						<input type="hidden" value="'.$row['seminarDuration'].'" name="seminarDuration" />
						<input type="hidden" value="'.date("h:i a", strtotime($row['seminarStartTime'])).' - '.date("h:i a", strtotime($row['seminarEndTime'])).'" name="seminarTime" />
                        <p ><button type="submit" name="Groups" class="btn" style="float: left; margin-right: 20px;font-weight:bolder;">Subscribe</button>
                        </p>
						<p ></p>
						
						</form><br><br>
						
					</div>
					
				</div>
				';	
			}
			echo $results;
		}

	}

	if($_POST['action'] == "PopulateCSR"){
			$sql = "SELECT * FROM csrEvents
			WHERE csrID  = '".$_POST['contentId']."' ";

				$result = mysqli_query($con, $sql);
				$queryResult = mysqli_num_rows($result);  
				if($queryResult > 0 ){
				while ($row = mysqli_fetch_array($result)){
				$results =' 

			<h6 style="font-weight:300; text-align:center;">Event Code: '.$row['csrTitle'].'</h6>
				<a class="close" href="javascript:void(0)">&times;</a>				
					<div class="content ">
						<img src="images/'.$row['csrImg'].'" alt="" style="width: 100%; margin-bottom: 2%/>
						<div class="raw">
						<h6 style="font-weight:300;">Event Datails</h6>
						<p class="coll"><i class="fa fa-calendar"> '.date_format(date_create($row['csrDate']),"D jS M, Y").'</i></p>
						<p class="coll" style="text-align: center;"><i class="fa fa-clock"> '.$row['csrStartTime'].' - '.$row['csrEndTime'].'</i></p>
						<p class="coll"><i class="fa fa-map-marker"> '.$row['csrPlace'].'</i></p>
						</div>
					</div>

					<div class="coll4">
						<h6 style="font-weight:300;">Overview</h6>
						<p>'.nl2br($row['csrOverview']).'</p>
					</div>
					<div class="coll4">
						<h6 style="font-weight:300;">Who should attend</h6>
						<p>'.nl2br($row['etarget']).'</p>
					</div>
					<h6 style="font-weight:300;">Facilitator</h6>
					<div class="mycard">						
						<div class="raw">
							<div class="coll2">
							<img  src="../about/images/'.$_SESSION['ks_image'].'" alt="image" style="width: 100%; margin-bottom: 2%/"> <br>
							


							<form action="facilitator.php" method="POST" >
							<input type="hidden" value="'.$row['ks_name'].'" name="facilitator" />
							<button type="submit" style="text-align:left;">'.$row['ks_name'].'</button>
							</form>
							</div>
							<div class="coll3">'.substr($row['ks_profile'], 0, 350).'..
							<form action="facilitator.php" method="POST" >
							<input type="hidden" value="'.$row['ks_name'].'" name="facilitator" />
							<button type="submit" style="text-align:left;">Read more</button>
							</form>
						</div>
					</div>

					
				</div>
				';	
			}
			echo $results;
		}else{
			echo "Sorry this event was not found";
		}
	}

	if($_POST['action'] == "populateProgrammes"){
			$sql = "SELECT * FROM offTheShelf WHERE seminarID = '".$_POST['contentId']."' ";
				$result = mysqli_query($con, $sql);
				$queryResult = mysqli_num_rows($result);  
				if($queryResult > 0 ){
				while ($row = mysqli_fetch_array($result)){
				$results .=' 
				<h6 style="font-weight:300; text-align:center;">'.$row['programmeName'].'  '.$key.'</h6>
				<a class="close" href="javascript:void(0)">&times;</a>				
				<div class="content ">
					<div class="raw">
						<p class="coll"> <i class="fas fa-ticket-alt"></i> R'.$row['fees'].' </p> 
						<p class="coll" > <i class="fa fa-clock"> </i> '.$row['duration'].'</p>
					</div>

					<div class="coll4">
						<h6 style="font-weight:300;">Description</h6>
						<p>'.nl2br($row['programmeDescription']).'</p>
					</div>
					<div class="coll4">
						<h6 style="font-weight:300;">Who should attend ?</h6>
						<p>'.nl2br($row['programmetarget']).'</p>
					</div>


					<div class="flex" style="padding-top: 5%; ">
						 
						<form action="pages-proposal.php" method="post">
                        <input type="hidden" name="ename" value="'.$row['programmeName'].'">

                        <input type="hidden" name="seminarVenue" value="'.$row['programmeName'].'">
                        <input type="hidden" name="seminarDuration" value="'.$row['programmeName'].'">
                        <input type="hidden" name="seminarTime" value="'.$row['programmeName'].'">
                        <p ><button type="submit" name="Groups" class="btn" style="float: left; margin-right: 20px;font-weight:bolder;">Request a  Proposal</button>
                        </p>
						<p ></p>
						
						</form><br><br>
						
					</div>
					
				</div>
				';		
			}
			echo $results;
		}else{
			echo "Sorry this event was not found";
		}
	}


}
?>