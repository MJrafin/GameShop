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

	$hashedpassword = $usernameexist["password"]; //geting the hashed password frome database and matching with the given password
	$checkpassword = password_verify($password, $hashedpassword);

	if ($checkpassword == false) {
		header("location: Admin_login.php?error=wrongpassword");
 		exit();
	}
	else if ($checkpassword == true) {
		session_start();
		$_SESSION['username'] = $username; //saving the uername in a Session variable 
		header("location: index.php");
 		exit();
	}