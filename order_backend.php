<?php 
	include "DB_connection.php";
	include "function.php";
if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$game = $_POST['game_id'];
		$price = $_POST['price'];
		$sql = "INSERT INTO orders (customer_name, customer_email, customer_phone, customer_address, game, order_date, total_price, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";

		$stmt = mysqli_stmt_init($connected);

		if (!mysqli_stmt_prepare($stmt, $sql)) { 
			header("location: order_form.php?error=stmtfailed01");
			exit();
		}

		$date = date("Y.m.d");
		$status = "pending";
		mysqli_stmt_bind_param($stmt, "ssisssis",$name, $email, $phone, $address, $game, $date, $price, $status);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);

		header("location: index.php");
		exit();
	}
if (isset($_GET['id'])) {
	$id=$_GET['id'];
	$title = $_GET['title'];
	$sql = "UPDATE orders SET status = 'confirm' WHERE id = '$id';";
	$result = mysqli_query($connected, $sql);
	$sql1 = "UPDATE games SET total_sell = (total_sell + 1) WHERE title = '$title';";
	$result1 = mysqli_query($connected, $sql1);
	header("location: order.php");
	exit();
}


