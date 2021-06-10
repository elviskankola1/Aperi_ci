<?php
include "connectDB.php";
$date = date("y-m-d", time());
if(isset($_POST['action'])){
	if($_POST['action']=="GetFiltered"){
		$sql = "SELECT * FROM ngomaSeminars
			WHERE seminarOffering  ='".$_POST['mission']."' 
			";
			$result = mysqli_query($con, $sql);
			if(!$result){
			echo mysqli_error($con);
			}else{
			$queryResult = mysqli_num_rows($result);  
			if($queryResult > 0 ){
			while ($row = mysqli_fetch_array($result)){
				$profile = "";
				$id = $row['seminarID'];
				$ename = $row['seminarName'];
				$eplace = $row['seminarVenue'];
				$eprice = $row['seminarPrice'];
				$edates = date_create($row['seminarDate']);
				$edate = date_format($edates,"D jS M, Y");
				$d = date_format($edates,"j");
				$dd = date_format($edates,"m Y");
				$edateFor = date_format($edates,"dd/mm/yy");
				$eoverview =$row['seminarDescription'];
				$date1=date_create(date("y-m-d"));
				$date2=date_create($row['seminarDate']);
				$diff=date_diff($date2,$date1);
				$final= $diff->format("%R%a");	
				$key = "";
				if($row['seminarOffering'] == "LS"){
						$key = '<i class="far fa-compass" style="background-color: red; color:white;"></i>';
					}elseif($row['seminarOffering'] == "LO"){
						$key = '<i class="far fa-compass" style="background-color: blue; color:white;"></i>';
					}elseif($row['seminarOffering'] == "LB"){
						$key = '<i class="far fa-compass" style="background-color:#4caf50; color:white;"></i>';
					}elseif($row['seminarOffering'] == "LS2"){
						$key = '<i class="far fa-compass" style="background-color:#FACB3D; color:white;"></i>';
					}else{
						$key = "";
					}			    	
				echo '
					<div class="col col-m-12 col-t-12 col-d-3 col-d-lg-3">
		              			<div class="box-item card-box">
										<div class="image">
											<a href="javascript:void(0)">
												<img src="images/events/'.$row['seminarPhoto'].'" alt="poster"  style="height:150px; object-fit: cover;"/>
												<span class="info">
													<span class="icon la la-newspaper-o"></span>

												</span>
												<span class="date" style="position: absolute;top: -1px;"><strong>'.$d.'</strong>'. $dd.'</span>
												
											</a>
											<h6 style="font-weight: 300; font-size: 14px">'.substr($ename,0, 20).'...</h6>
									</div>
									
										<div class="desc">
											
								                <table style="padding: 0px;margin: 0px !important;font-size: 12px;">
								                	
								                	<tr>
								                		<td>Prix:</td>
								                		<td class="g"><sup>R</sup>'. $eprice.'/pers</td>
								                	</tr>
								                	<tr>
								                		<td>Heure:</td>
								                		<td class="g">'.date("h:i a", strtotime($row['seminarStartTime'])).' , '.date("h:i a", strtotime($row['seminarEndTime'])).'</td>
								                	</tr>
								               </table><br></div>';
								               if($row['seminarCountry'] == "Online event"){
						
						echo " <div class ='ribbon' style='margin-top: -2rem; font-size: 12px;'>



						online 
						
						 
						</div>  ";

					}else{ echo ' <p style="margin-top: -2rem; font-size: 12px;">'.nl2br($row['seminarCity']).' , '.$row['seminarCountry'].'</p>';}
								              
								              echo ' <style type="text/css">
								                	tr td{
								                		border-bottom: .001px ridge #181716;
								                		border-bottom-color: #181710
								                		margin: 0px;
								                		padding: 5px;
								                		font-size: 12px;
								                	}
								                	td.g{
								                		text-align: right;
								                	}
								                	td.c{
								                		text-align: left;
								                	}
								                	.far {
                                                      padding: 5px;
                                                  }
                                                 
												</style>
										            <p style="border-top: .1px solid chocolate;border-bottom: none; padding: 0px; margin-top: 5% !important;" ><a class="popModal" id="'.$id.'" href="javascript:void(0)">View</a> '.$key.' </p>					
										</div>
									</div>
								</div>
								</div>
			';	
				
		
			
		}

	}else{
			echo "No events found";
	}

	}
	}
	
	if($_POST['action']=="getEvents"){
		$sql = "SELECT * FROM ngomaSeminars
			";
			$result = mysqli_query($con, $sql);
			if(!$result){
			echo mysqli_error($con);
			}else{
			$queryResult = mysqli_num_rows($result);  
			if($queryResult > 0 ){
			while ($row = mysqli_fetch_array($result)){
				$profile = "";
				$id = $row['seminarID'];
				$ename = $row['seminarName'];
				$eplace = $row['seminarVenue'];
				$eprice = $row['seminarPrice'];
				$edates = date_create($row['seminarDate']);
				$edate = date_format($edates,"D jS M, Y");
				$d = date_format($edates,"j");
				$dd = date_format($edates,"m Y");
				$edateFor = date_format($edates,"dd/mm/yy");
				$eoverview =$row['seminarDescription'];
				$date1=date_create(date("y-m-d"));
				$date2=date_create($row['seminarDate']);
				$diff=date_diff($date2,$date1);
				$final= $diff->format("%R%a");	
				$key = "";
				if($row['seminarOffering'] == "LS"){
						$key = '<i class="far fa-compass" style="background-color: red; color:white;"></i>';
					}elseif($row['seminarOffering'] == "LO"){
						$key = '<i class="far fa-compass" style="background-color: blue; color:white;"></i>';
					}elseif($row['seminarOffering'] == "LB"){
						$key = '<i class="far fa-compass" style="background-color:#4caf50; color:white;"></i>';
					}elseif($row['seminarOffering'] == "LS2"){
						$key = '<i class="far fa-compass" style="background-color:#FACB3D; color:white;"></i>';
					}else{
						$key = "";
					}	
							    	
				echo '
					<div class="col col-m-12 col-t-12 col-d-3 col-d-lg-3">
		              			<div class="box-item card-box">
										<div class="image">
											<a href="javascript:void(0)">
												<img src="images/events/'.$row['seminarPhoto'].'" alt="poster"  style="height:150px; object-fit: cover;"/>
												<span class="info">
													<span class="icon la la-newspaper-o"></span>

												</span>
												<span class="date" style="position: absolute;top: -1px;"><strong>'.$d.'</strong>'. $dd.'</span>
												
											</a>
											<h6 style="font-weight: 300; font-size: 14px">'.substr($ename,0, 20).'...</h6>
									</div>
									
										<div class="desc">
											
								                <table style="padding: 0px;margin: 0px !important">
								                	
								                	<tr>
								                		<td>Prix:</td>
								                		<td class="g"><sup>R</sup>'. $eprice.'/pers</td>
								                	</tr>
								                	<tr>
								                		<td>Heure:</td>
								                		<td class="g">'.date("h:i a", strtotime($row['seminarStartTime'])).' , '.date("h:i a", strtotime($row['seminarEndTime'])).'</td>
								                	</tr>
								               </table><br></div>';
								               if($row['seminarCountry'] == "Online event"){
						
						echo " <div class ='ribbon' style='margin-top: -2rem; font-size: 12px;'>



						online 
						
						 
						</div>  ";

					}else{ echo ' <p style="margin-top: -2rem; font-size: 12px;">'.nl2br($row['seminarCity']).' , '.$row['seminarCountry'].'</p>';}
								              
								              echo ' <style type="text/css">
								                	tr td{
								                		border-bottom: .001px ridge #181716;
								                		border-bottom-color: #181710
								                		margin: 0px;
								                		padding: 5px;
								                		font-size: 12px;
								                	}
								                	td.g{
								                		text-align: right;
								                	}
								                	td.c{
								                		text-align: left;
								                	}
								                	.far {
                                                      padding: 5px;
								                </style>
										            <p style="border-top: .1px solid chocolate;border-bottom: none; padding: 0px; margin-top: 5% !important;" ><a class="popModal" id="'.$id.'" href="javascript:void(0)">View</a> '.$key.' </p>					
										</div>
									</div>
								</div>
								</div>
			';	
				
		
			
		}

	}else{
			echo "

			";
	}

	}	
}

	if($_POST['action']=="fetchProgrammes"){
		$sql = "SELECT * FROM offTheShelf
			";
			$result = mysqli_query($con, $sql);
			if(!$result){
			echo mysqli_error($con);
			}else{
			$queryResult = mysqli_num_rows($result);  
			if($queryResult > 0 ){
			while ($row = mysqli_fetch_array($result)){
				$key = "";
				if($row['programmeOffering'] == "LS"){
						$key = '<i class="far fa-compass" style="background-color: red; color:white;"></i>';
					}elseif($row['programmeOffering'] == "LO"){
						$key = '<i class="far fa-compass" style="background-color: blue; color:white;"></i>';
					}elseif($row['programmeOffering'] == "LB"){
						$key = '<i class="far fa-compass" style="background-color:#4caf50; color:white;"></i>';
					}elseif($row['seminarOffering'] == "LS2"){
						$key = '<i class="far fa-compass" style="background-color:#FACB3D; color:white;"></i>';
					}else{
						$key = "";
					}		    	
				echo '
					<div class="col col-m-12 col-t-12 col-d-4 col-d-lg-4">
		              			<div class="box-item card-box">
										
									<div class="image">
											<a href="javascript:void(0)">
											</a>
									</div>
										<div class="desc">
								               <h6 style="font-weight: 300; font-size: 14px">'.$row['programmeName'].' </h6>
										        <p style="border-top: .1px solid chocolate;border-bottom: none; padding: 0px; " >
										        <a class="popModal" id="'.$row['seminarID'].'" data-title="programmesModal" href="javascript:void(0)" style="font-weight:5px !important;">'.$key.' View And Request Proposal</a></p>					
										</div>
									</div>
								</div>
							</div>
					';	
				
		
			
		}
	}
}
}
	if($_POST['action']=="fetchFilteredProgrammes"){
		$sql = "SELECT * FROM offTheShelf WHERE  programmeOffering = '".$_POST['mission']."'
			";
			$result = mysqli_query($con, $sql);
			if(!$result){
			echo mysqli_error($con);
			}else{
			$queryResult = mysqli_num_rows($result);  
			if($queryResult > 0 ){
			while ($row = mysqli_fetch_array($result)){
				
				$key = "";
				if($row['seminarOffering'] == "LS"){
						$key = '<i class="far fa-compass" style="background-color: red; color:white;"></i>';
					}elseif($row['seminarOffering'] == "LO"){
						$key = '<i class="far fa-compass" style="background-color: blue; color:white;"></i>';
					}elseif($row['seminarOffering'] == "LB"){
						$key = '<i class="far fa-compass" style="background-color:#4caf50; color:white;"></i>';
					}elseif($row['seminarOffering'] == "LS2"){
						$key = '<i class="far fa-compass" style="background-color:#FACB3D; color:white;"></i>';
					}else{
						$key = "";
					}		    	
				echo '
					<div class="col col-m-12 col-t-12 col-d-4 col-d-lg-4">
		              			<div class="box-item card-box">
										
									<div class="image">
											<a href="javascript:void(0)">
											</a>
									</div>
										<div class="desc">
								               <h6 style="font-weight:200 !important;">'.$row['programmeName'].' </h6>
										        <p style="border-top: .1px solid chocolate;border-bottom: none; padding: 0px; margin-top: 10% !important" >
										        <a class="popModal" id="'.$row['seminarID'].'" data-title="programmesModal" href="javascript:void(0)" style="font-weight:5px !important;">'.$key.' View And Request Proposal</a></p>					
										</div>
									</div>
								</div>
							</div>
					';	
				
		
			
		}
	}
}
}

}else{
	echo "";
}

								
?>