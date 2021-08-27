<?php 
	include "DB_connection.php";
	include "function.php";
	//geting the admin id from admin by Get method
	$deleteid = $_GET['id'];
	if (useridexist($connected, $deleteid)) { //if the user id exist or not
		$sql="DELETE FROM admins WHERE id = $deleteid";
		$result = mysqli_query($connected, $sql); 
		header("location: Admin_manager.php");
	}
	else{
		header("location: Admin_manager.php?error=useridnotexist"); // if not sucessful througn an error
		exit();
	}