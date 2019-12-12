<?php 

	require_once('db.php');

	function validate($uname, $password){

		$conn = getConn();
		
		$sql = "select * from users where username='{$uname}' and password='{$password}'";

		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);

		return $user;
	}


 ?>