<?php 
	
	session_start();
	if (isset($_SESSION['username'])) {

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>

	<center>
		<h1>Welcome, Admin => <?php echo $_SESSION['username']; ?></h1>

		<a href="profile.php">Profile</a><br>
		<a href="changePassword.php">Change Password</a><br>
		<a href="../php/logout.php">Logout</a>

	</center>
</body>
</html>


<?php 

	}else{

		header('location: ../index.php');
	}

 ?>