<?php 
	include "DB_connection.php";
	include "function.php";
	$deleteid = $_GET['id'];
	if (useridexist($connected, $deleteid)) {
		$sql="DELETE FROM admins WHERE id = $deleteid";
		$result = mysqli_query($connected, $sql); 
		header("location: Admin_manager.php");
	}
	else{
		header("location: Admin_manager.php?error=useridnotexist");
		exit();
	}