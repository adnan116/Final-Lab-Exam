<?php

	function getConn(){

		$conn = mysqli_connect('localhost', 'root', '', 'test');

		return $conn;
	}

 ?>