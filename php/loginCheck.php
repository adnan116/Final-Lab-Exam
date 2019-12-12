<?php
	session_start();
	require_once('function.php');
	
	if(isset($_POST['submit'])){

		$uname = $_POST['uname'];
		$pass = $_POST['pass']

		if(empty($uname) == true || empty($pass) == true){
			echo "null submission!";
		}else{

			$user = validate($uname, $password);

			if(count($user) > 0){
				$_SESSION['username'] = $uname;
				$_SESSION['password'] = $password;
				if ($user['type'] == "Admin") {
					header('location: ../view/adminhome.php');
				}else{
					header('location: ../view/userhome.php');
				}
				
				

			}else{
				echo "invalid username/password";
			}
		}
	}else{
		header('location: ../index.php');
	}


?>