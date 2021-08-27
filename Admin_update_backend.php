<?php 
	session_start();
	include "DB_connection.php";
	include "function.php";
	//checking the inputs and save to variable-->
	if (isset($_POST['update'])) {
		$username = $_SESSION['username'];
		$oldpassword = $_POST['oldpassword'];
		$newpassword = $_POST['newpassword'];
		$confirmpassword = $_POST['confirmpassword'];
//checking passward error-->
	if (passwardMatch($newpassword,$confirmpassword) == false) {
 		header("location: Admin_update.php?error=passwardMissMatch");
 		exit();
 	}

 	$usernameexist = usernameexist($connected, $username);

	$hashedpassword = $usernameexist["password"];
	$checkpassword = password_verify($oldpassword, $hashedpassword);
//checking password
	if ($checkpassword == false) {
		header("location: Admin_update.php?error=wrongpassword");
 		exit();
	}
	else if ($checkpassword == true) {

		$hashedpass = password_hash($newpassword, PASSWORD_DEFAULT);  //hashing new password
		$sql = "UPDATE admins SET password = '$hashedpass' WHERE username = '$username';"; 
		$result = mysqli_query($connected, $sql); // update sql exicution
		header("location: Admin_manager.php");
 		exit();
	}
}
