<?php 
	include "DB_connection.php";
	include "function.php";
	if ($_GET['action']=="delete") {
		$deleteid = $_GET['id'];
		$sql="DELETE FROM games WHERE id = '$deleteid';";
		$result = mysqli_query($connected, $sql);
		header("location: Games_manager.php");
		exit();
	}