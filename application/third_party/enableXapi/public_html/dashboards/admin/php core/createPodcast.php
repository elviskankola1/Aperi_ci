<?php
include "../../../connectDB.php";


			
				   $podcastType = secure($_POST['podcastType']);
				   $podcastTitle = secure($_POST['Title']);
				   $podcastAuthor = secure($_POST['author']);
				   $podcastOffering = secure($_POST['podcastOffering']);

				   $target_path = "../podcast/";  
                  $target_path = $target_path.basename( $_FILES['file']['name']);   

                  $target_path2 = "../podcast/thumbnails/";  
                  $target_path2 = $target_path2.basename( $_FILES['thumbnail']['name']);   
  
                 
  
                 if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {  
                 	move_uploaded_file($_FILES['thumbnail']['tmp_name'], $target_path2);  
                            echo "File uploaded successfully!";  
                    } else{  
						 echo"Error.";
						}
				  				  
							$sql = 'INSERT INTO `podcast`(`podcastTitle`, `postcastType`, `podcastAuthour`, `podcastOffering`,thumbnail, `podcastFile`)
							VALUES ( "'.$podcastTitle.'",
							 "'.$podcastType.'",
							  "'.$podcastAuthor.'", 
							  "'.$podcastOffering.'",
							  "'.basename($_FILES['thumbnail']['name']).'",
							"'.basename($_FILES['file']['name']).'")'
											    ;
					                if(!mysqli_query($con, $sql)){
					                 echo mysqli_error($con);
					                }else{

				  
					                	echo "Podcast Successfully created";
					                }
   							                    


function secure($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>