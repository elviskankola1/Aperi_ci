<?php
$db = mysqli_connect("localhost", "mathew", "@Mathew100$","ngomaDev");
if(isset($_POST['action'])){
	//declaring default values
		$eventDay="";
		$eventMonth="";

	if($_POST['action'] ==="fetch_event"){
		$sql = "SELECT * FROM Events LIMIT 0,3";
		$result = mysqli_query($db, $sql);
		if(!$result){
		$output .= mysqli_error($db);
		 }
		 else{
		    $queryResult = mysqli_num_rows($result);  
		     }
		if($queryResult > 0 ){
			
			while ($row = mysqli_fetch_array($result)){
				$eventDay = date('d' , strtotime($row['event_date']));
				$eventMonth = date('M', strtotime($row['event_date']));
			  	echo '
	  				<div class="col col-m-12 col-t-12 col-d-4 col-d-lg-4">
									<div class="box-item card-box">
										<div class="image">
											<a href="event.php?id='.$row['event_id'].'">
												<img src="'.$row['event_img'].'" alt="" />
												<span class="info">
													<span class="icon la la-newspaper-o"></span>
												</span>
												<span class="date"><strong>'.$eventDay.'</strong>'.$eventMonth.'</span>
											</a>/
										</div>
										<div class="desc">
											<a href="event.php?id='.$row['event_id'].'" class="name">'.$row['event_name'].'</a>
											<div class="category">Coding</div>
										</div>
									</div>
					</div>
	  			';
			
			}
	}else{
		echo "<p>It's empty in here</p>";
	}
}elseif($_POST['action'] ==="load_more_events"){ //load data after user clicks load more
		$page = $_POST['page'];
		$sql = "SELECT * FROM Events  LIMIT $page,3";
		$result = mysqli_query($db, $sql);
		if(!$result){
			echo mysqli_error($db);
		 }
		 else{
		    $queryResult = mysqli_num_rows($result);  
		  }
			if($queryResult > 0 ){
				while ($row = mysqli_fetch_array($result)){
					$eventDay = date('d' , strtotime($row['event_date']));
					$eventMonth = date('M', strtotime($row['event_date']));
					echo'<div class="col col-m-12 col-t-12 col-d-4 col-d-lg-4">
							<div class="box-item card-box">
								<div class="image">
									<a href="event.php?id='.$row['event_id'].'">
										<img src="'.$row['event_img'].'" alt="" />
										   <span class="info">
											  <span class="icon la la-newspaper-o"></span>
											   </span>
												<span class="date"><strong>'.$eventDay.'</strong>'.$eventMonth.'</span>
											</a>/
										</div>
										<div class="desc">
											<a href="event.php?id='.$row['event_id'].'" class="name">'.$row['event_name'].'</a>
										<div class="category">Coding</div>
									</div>
							</div>
						</div>
		  			';
				
		}
	}else{
		echo "Empty";
	}

	}

}


