
<?php 
$con = mysqli_connect("localhost", "mathew", "@Mathew100$","ngomaDev");
if(!$con){
    echo "Connection failed";
}


  $query = $_POST['query']; 
    
     
    $min_length = 3;
    
     
    if(strlen($query) >= $min_length){ 
         
        $query = htmlspecialchars($query); 
    
         
        $query = mysqli_real_escape_string($con,$query);
     
         
        $raw_results = mysqli_query($con,"SELECT * FROM Events
            WHERE (`event_name` LIKE '%".$query."%') OR (`event_description` LIKE '%".$query."%')  OR (`event_date` LIKE '%".$query."%')") or die(mysqli_error($con));
             
      
         
        if(mysqli_num_rows($raw_results) > 0){ 
             
            while($results = mysqli_fetch_array($raw_results)){
           
             
                echo "<p><h3>".$results['event_name']."</h3>".$results['event_description']."<br> Date:".$results['event_date'];
               
            }
             
        }
        else{ 
            echo "No results";
        }
         
    }
    else{ 
        echo "Minimum length is ".$min_length;
    }




?>