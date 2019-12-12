<?php 
	
	session_start();
	if (isset($_SESSION['username'])) {

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>
<body>

	<div id="data">
		
	</div>

	<script type="text/javascript">
		
			var xhttp = new XMLHttpRequest();
			xhttp.open("POST", "../php/alluser.php", true);
			xhttp.setRequestHeader('content-type', 'application/x-www-form-urlencoded';
			xhttp.send();
			xhttp.onreadystatechange = function()
			{
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById('data').innerHTML = this.responseText; 
					
				}

			};
		
	</script>

</body>
</html>



<?php 

	}else{

		header('location: ../index.php');
	}

 ?>