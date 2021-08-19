<?php 
	include "DB_connection.php";
	include "function.php";

	if (isset($_POST['login'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
	}

	else{
		header("location: Admin_login.php");
	}
  
	$usernameexist = usernameexist($connected, $username);
//user id check if exist or not
	if ($usernameexist == false) {
		header("location: Admin_login.php?error=usernameexist");
 		exit();
	}

	$hashedpassword = $usernameexist["password"];
	$checkpassword = password_verify($password, $hashedpassword);

	if ($checkpassword == false) {
		header("location: Admin_login.php?error=wrongpassword");
 		exit();
	}
	else if ($checkpassword == true) {
		session_start();
		$_SESSION['username'] = $username;
		header("location: index.php");
 		exit();
	}