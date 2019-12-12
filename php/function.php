<?php 

	require_once('db.php');

	function validate($uname, $password){

		$conn = getConn();
		
		$sql = "select * from users where name='{$uname}' and password='{$password}'";

		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);

		return $user;
	}

	function register($id, $pass, $name, $email, $utype){

		$conn = getConn();
		$sql = "insert into users values('{$id}', '{$pass}','{$name}', '{$email}', '{$utype}')";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}

	}

	function single_user($name)
	{
		$conn = getConn();
		$sql = "select * from author where name='{$name}'";
		$result = mysqli_query($conn,$sql);

		return $result;
	}


 ?>