<?php
	session_start();
	require_once('function.php');
	
	if(isset($_POST['submit'])){

		$u = $_POST['uname'];
		$p = $_POST['pass'];

		if($u == "" || $p == ""){
			echo "null submission!";
		}else{

			$user = validate($u, $p);

			if(count($user) > 0){
				$_SESSION['username'] = $u;
				$_SESSION['password'] = $p;
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