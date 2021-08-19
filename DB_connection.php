<?php 

	$connected = mysqli_connect('localhost', 'root', '', 'gamestore');
	if(!$connected){
		die("Connection Failed:" . mysqli_connect_error());
	}
	