<?php
include "connectDB.php";
$date = date("y-m-d", time());
if(isset($_POST['action'])){
	if($_POST['action']=="GetFiltered"){
		$sql = "SELECT * FROM podcast
			WHERE podcastOffering  ='".$_POST['mission']."' 
			";
			$result = mysqli_query($con, $sql);
			if(!$result){
			echo mysqli_error($con);
			}else{
			$queryResult = mysqli_num_rows($result);  
			if($queryResult > 0 ){
			while ($row = mysqli_fetch_array($result)){
						$id = $row['podcastID'];

						$fetchAuthor = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM ngomaFacilitators WHERE facilitatorID = ".$row['podcastAuthour'].""));
				echo '
					<div class="col col-m-12 col-t-12 col-d-3 col-d-lg-3">
		              			<div class="box-item card-box">
										<div class="image">
											<a href="javascript:void(0)">
												<img src="dashboards/admin/podcast/thumbnails/'.$row['thumbnail'].'" alt="poster"  style="height:150px; object-fit: cover;"/>
												<span class="info">
													<span class="icon la la-newspaper-o"></span>

												</span>
										
											</a>
										
									</div>
									
										<div class="desc">
											
								                <table style="padding: 0px;margin: 0px !important">
								                	
								                	<tr>
								                		<td>Author:</td>
								                		<td class="g">'.$fetchAuthor ['facilitatorName'].'</td>
								                	</tr>
								                	<tr>
								                		<td>Date:</td>
								                		<td class="g">'.date("d-m-Y", strtotime($row['dateCreated'])).'</td>
								                	</tr>
								               </table><br></div>';
								              
								              
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
										            <p style="border-top: .1px solid chocolate;border-bottom: none; padding: 0px; margin-top: 5% !important;" ><a class="popModal" id="'.$id.'" href="javascript:void(0)">View </a> </p>					
										</div>
									</div>
								</div>
								</div>
			';	
				
		
			
		}

	}else{
			echo "No podcast found";
	}

	}
	}
	
	if($_POST['action']=="getPodcast"){
		$sql = "SELECT * FROM podcast
			";
			$result = mysqli_query($con, $sql);
			if(!$result){
			echo mysqli_error($con);
			}else{
			$queryResult = mysqli_num_rows($result);  
			if($queryResult > 0 ){
			while ($row = mysqli_fetch_array($result)){

				$author = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM ngomaFacilitators WHERE ngomaFacilitators.facilitatorID = ".$row['podcastAuthour'].""));

				$profile = "";
				$id = $row['podcastID'];
				$ename = $row['podcastTitle'];
				
			
			
							    	
				echo '
					<div class="col col-m-12 col-t-12 col-d-3 col-d-lg-3">
		              			<div class="box-item card-box">
										<div class="image">
											<a href="javascript:void(0)">
												<img src="dashboards/admin/podcast/thumbnails/'.$row['thumbnail'].'" alt="poster"  style="height:150px; object-fit: cover;"/>
												<span class="info">
													<span class="icon la la-newspaper-o"></span>

												</span>
										
											</a>
										
									</div>
									
										<div class="desc">
											
								                <table style="padding: 0px;margin: 0px !important">
								                	
								                	<tr>
								                		<td>Author:</td>
								                		<td class="g">'.$author['facilitatorName'].'</td>
								                	</tr>
								                	<tr>
								                		<td>Date:</td>
								                		<td class="g">'.date("d-m-Y", strtotime($row['dateCreated'])).'</td>
								                	</tr>
								               </table><br></div>';
								              
								              
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
										            <p style="border-top: .1px solid chocolate;border-bottom: none; padding: 0px; margin-top: 5% !important;" ><a class="popModal" id="'.$id.'" href="javascript:void(0)">View</a> </p>					
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



}else{
	echo "";
}

								
?>