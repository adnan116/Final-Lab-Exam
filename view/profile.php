<?php 
	require_once('../php/function.php');
	session_start();
	if (isset($_SESSION['username'])) {
	 	
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Profile</title>
 </head>
 <body>

 	<?php 

 		$result = single_user($_SESSION['username']);
 		$row = mysqli_fetch_assoc($result);

 	 ?>
 	
 	<table>
 		<tr>
 			<td colspan="2" align="center">Profile</td>
 		</tr>
 		<tr>
 			<td>ID</td>
 			<td><?php echo $row['id']; ?></td>
 		</tr>
 		<tr>
 			<td>Name</td>
 			<td><?php echo $row['name']; ?></td>
 		</tr>
 		<tr>
 			<td>Email</td>
 			<td><?php echo $row['email']; ?></td>
 		</tr>
 		<tr>
 			<td>User Type</td>
 			<td><?php echo $row['type']; ?></td>
 		</tr>
 	</table>

 </body>
 </html>


 <?php 

	}else{

		header('location: ../index.php');
	}

 ?>