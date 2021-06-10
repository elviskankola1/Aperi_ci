<?php
session_start();
unset($_SESSION['seminarID']);
	echo "<script>window.location='index.php';</script>";

?>