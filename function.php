<?php 
function passwardMatch($password, $repeat_password) { 
	$result;

	if ($password == $repeat_password) {
		$result = true;
	}

	else {
		$result = false; 
	}
	return $result;
}

function usernameexist($connection, $username) {
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
		return $result;
	}

	mysqli_stmt_close($stmt);
}

function useridexist($connection, $userid) {
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