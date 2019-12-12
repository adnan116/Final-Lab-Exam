<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>

	<form method="POST" action="../php/regCheck.php"> 
		<fieldset>
			<legend>Registration</legend>
			<table>
				<tr>
					<td>Id</td>
					<td><input type="text" name="id"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="Password" name="pass"></td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="Password" name="cpass"></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td>User Type</td>
					<td>
						<select name="utype">
							<option value=""></option>
							<option value="User">User</option>
							<option value="Admin">Admin</option>
						</select>
					</td>
				</tr>
				
				<tr>
					<td>
						<input type="submit" name="submit" value="Registration">
						<input type="reset" name="reset" value="Reset">
					</td>
					<td>
						<a href="../index.php">Login</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>

</body>
</html>