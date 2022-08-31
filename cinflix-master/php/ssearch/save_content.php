<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['save'])){
		$title = addslashes($_POST['title']);
		$description = addslashes($_POST['description']);
		
		mysqli_query($conn, "INSERT INTO `video` VALUES('', '$title', '$description')") or die(mysqli_error());
		
		header('location: index.php');
		
	}
?>