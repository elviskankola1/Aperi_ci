<?php
$connect = mysqli_connect("localhost", "mathew", "@Mathew100$","ngomaDev");
$output = '';

if(isset($_POST['action']))
{
	if($_POST['action']==="searchData"){

		if(isset($_POST["query"]))
		{
			$search = mysqli_real_escape_string($connect, $_POST["query"]);
			$query = "
			SELECT * FROM Events 
			WHERE event_name LIKE '%".$search."%'
			OR event_description LIKE '%".$search."%' 
			";
		}
		$result = mysqli_query($connect, $query);
		if(mysqli_num_rows($result) > 0)
		{
			$output .= '<div class="table-responsive">
							<table class="table table bordered">
								<tr>
									<h4>Event Name</h4>
								</tr>';
			while($row = mysqli_fetch_array($result))
			{
				$output .= '
					<ul>
						<li><tr><a href="event.php?id='.$row['event_id'].'">'.$row["event_name"].'</a></tr></li>
						</ul>
						
					
				';
			}
			echo $output;
		}
		else
		{
			echo 'Data Not Found';
		}
	}

}


///////////////////////////////////////////////////////////////////////////


?>