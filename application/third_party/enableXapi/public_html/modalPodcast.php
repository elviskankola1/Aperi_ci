<?php
session_start();
$results = "";
include "connectDB.php";
if(isset($_POST['action'])){
	if($_POST['action'] == "PopulateModal"){
		$s =$con->query("
		 SELECT * FROM podcast
			INNER JOIN ngomaFacilitators ON ngomaFacilitators.facilitatorID = podcast.podcastAuthour
			WHERE podcast.podcastID  ='".$_POST['contentId']."' 
		 ");			
			if($s->num_rows>0){
                 

				while($row = $s->fetch_assoc()){
				?>

				<a data-dismiss="modal" class="close" href="javascript:void(0)">&times;</a>		

				<?php echo '<div class="content ">
						<div class="raw" style="width:100%; ">

							<video src="dashboards/admin/podcast/'.$row['podcastFile'].'" alt="video" controls style="width:100%; height:auto;"/>
					
					
				';	
			}
			echo $results;
		}

	}

}



?>
