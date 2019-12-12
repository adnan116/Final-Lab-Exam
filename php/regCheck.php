<?php
	
	require_once('function.php');

	if(isset($_POST['submit'])){

		$id = $_POST['id'];
		$pass = $_POST['pass'];
		$cpass = $_POST['cpass'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$utype = $_POST['utype'];
		if($id == "" || $pass == "" || $cpass == "" || $name == "" || $email == "" || $utype == ""){
			echo "null submission!";
		}elseif ($pass != $cpass) {
			echo "password not match";
		}elseif (strlen($pass) < 5) {
			echo "Password minimum 5 character";
		}/*elseif (strpos($pass, '$') == false && strpos($pass, '@') == false && strpos($pass, '#') == false && strpos($pass, '&') == false) {
			echo "Password must have a special character";
		}*/
		else{

			$status = register($id, $pass, $name, $email, $utype);

			if($status){

				header('location: ../index.php');
			}else{
				header('location: ../view/reg.php');
			}
		}

	}else{
		header('location: ../view/reg.php');
	}


?>