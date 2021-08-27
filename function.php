<?php 
function passwardMatch($password, $repeat_password) { //password and confirm password matching check
	$result;

	if ($password == $repeat_password) {
		$result = true;
	}

	else {
		$result = false; 
	}
	return $result;
}

function usernameexist($connection, $username) { // checking the user exist or not
	$sql = 'SELECT * FROM admins WHERE username = ?;';
	$stmt = mysqli_stmt_init($connection);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location: signup.php?error=stmtfailed01 ");
 		exit();
	}
	mysqli_stmt_bind_param($stmt, "s" , $username);
	mysqli_stmt_execute($stmt);

	$resultdata = mysqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc($resultdata)) {
		return $row;
	}
	else{
		$result = false;
		return $result; //returning the users row
	}

	mysqli_stmt_close($stmt);
}

function useridexist($connection, $userid) { //checking if the user id is taken before or not 
	$sql = 'SELECT id FROM admins ;';
	$result = mysqli_query($connection, $sql);  
	$temp = 0;            

	while ($admin = mysqli_fetch_array($result)) {
		if ($admin['id']==$userid) {
			$temp=1;
		}
	}
	if ($temp == 1) {
		return true;
	}
	else{
		return false;
	}
}