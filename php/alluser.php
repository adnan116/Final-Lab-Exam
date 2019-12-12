<?php 
	require_once('function.php');
	session_start();
	if (isset($_SESSION['username'])) {

 ?>


 



<?php 

	}else{

		header('location: ../index.php');
	}

 ?>