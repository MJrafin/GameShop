<?php 
	include "DB_connection.php";
	include "function.php";
	if ($_GET['action']=="delete") {
		$deleteid = $_GET['id'];
		$sql="DELETE FROM category WHERE id = '$deleteid';";
		$result = mysqli_query($connected, $sql);
		header("location: category_manager.php");
		exit();
	}