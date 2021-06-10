<?php 


if($_POST['mode'] =='group'){

	header('location:index.php?email='.$_POST['email'].'&date='.$_POST['date'].'&time='.$_POST['time'].'&end='.$_POST['end'].'&roomName='.$_POST['roomName'].'');




}elseif($_POST['mode'] >100){

  header('location:webinar.php');



}



?>