<?php
	$conn = mysqli_connect('localhost', 'root', '', 'z_new_database') or die(mysqli_error());
	
	if(!$conn){
		die("Error: Failed to connect to database");
	}
?>