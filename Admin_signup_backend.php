<?php 
	include "DB_connection.php";
	include "function.php";

//checking the inputs and save to variable-->
if (isset($_POST['signup'])) {
		$fullname = $_POST['fullname'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$repeat_password = $_POST['repeat_password'];
	}

else{
	header("location: Admin_signup.php");
}


//checking passward error-->
 if (passwardMatch($password,$repeat_password) == false) {
 		header("location: Admin_signup.php?error=passwardMissMatch");
 		exit();
 }


//checking username exist or not error-->
 if (usernameexist($connected, $username) !== false) {

 		header("location: Admin_signup.php?error=usernameexist");
 		exit();
 	 }



$sql = "INSERT INTO admins (full_name,username, password) VALUES (?, ?, ?);";

$stmt = mysqli_stmt_init($connected);

if (!mysqli_stmt_prepare($stmt, $sql)) { 
	header("location: Admin_signup.php?error=stmtfailed02");

	exit();
}

$hashedpass = password_hash($password, PASSWORD_DEFAULT);
 
mysqli_stmt_bind_param($stmt, "sss",$fullname, $username, $hashedpass); 
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

session_start();
$_SESSION['username'] = $username;

header("location: Admin_manager.php");
exit();