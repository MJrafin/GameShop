<?php 
	include "DB_connection.php";
	include "function.php";
if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$game_id = $_POST['game_id'];
		$price = $_POST['price'];
	}

else{
	header("location: order_form.php");
}

$sql = "INSERT INTO orders (customer_name, customer_email, customer_phone, customer_address, game_id, order_date, total_price) VALUES (?, ?, ?, ?, ?, ?, ?);";

$stmt = mysqli_stmt_init($connected);

if (!mysqli_stmt_prepare($stmt, $sql)) { 
	header("location: order_form.php?error=stmtfailed01");
	exit();
}

$date = date("Y.m.d");
 
mysqli_stmt_bind_param($stmt, "ssisisi",$name, $email, $phone, $address, $game_id, $date, $price);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

$sql1 = "UPDATE games SET total_sell = (total_sell + 1) WHERE id = '$game_id';";
$result = mysqli_query($connected, $sql1);

header("location: index.php");
exit();