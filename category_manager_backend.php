<?php 
	include "DB_connection.php";
	include "function.php";
	//category deletion
	if ($_GET['action']=="delete") {
		$deleteid = $_GET['id'];
		$delettitle = $_GET['title'];
		$sql="DELETE FROM category WHERE id = '$deleteid';";
		$result = mysqli_query($connected, $sql);

        $sql2="DELETE FROM games WHERE category = '$delettitle';";
		$result2 = mysqli_query($connected, $sql2);
		header("location: category_manager.php");
		exit();
	}

	//category insertion
	if (isset($_POST['add'])) {
		$title = $_POST['title'];
		$active = $_POST['active'];
		$featured = $_POST['featured'];
		$image = $_FILES['image']['name'];

		$sql="INSERT INTO category( title, image, active, featured) VALUES (?,?,?,?)";
			$stmt = mysqli_stmt_init($connected);
			if (!mysqli_stmt_prepare($stmt, $sql)) { 
				header("location: category_manager.php?error=stmtfailedcategoryadd");

				exit();
			}
			mysqli_stmt_bind_param($stmt, "ssss",$title, $image, $active, $featured); 
			mysqli_stmt_execute($stmt);
			mysqli_stmt_close($stmt);
			header("location: category_manager.php");
			exit();
	}

	//category update
	if (isset($_POST['update'])) {

		if (isset($_POST['category_id'])) {
			$category_id = $_POST['category_id'];
			
				if (isset($_POST['title'])) { //category title update in the category table and aslo in the game table 
					$title = $_POST['title'];
					$sql = "UPDATE category SET title = '$title' WHERE id = '$category_id';";
					$result = mysqli_query($connected, $sql);
					$oldtitle = $_POST['oldtitle'];
					$sql2 = "UPDATE games SET category = '$title' WHERE category = '$oldtitle';";
					$result2 = mysqli_query($connected, $sql2);
				}
				
				if (isset($_FILES['image'])) { //category image update
					$image = $_FILES['image']['name'];
					$sql = "UPDATE category SET image = '$image' WHERE id = '$category_id';";
					$result = mysqli_query($connected, $sql);
				}
				if (isset($_POST['active'])) { //category activation update
					$active = $_POST['active'];
					$sql = "UPDATE category SET active = '$active' WHERE id = '$category_id';";
					$result = mysqli_query($connected, $sql);
				}

				if (isset($_POST['featured'])) { //category featured update
					$featured = $_POST['featured'];
					$sql = "UPDATE category SET  featured = '$featured' WHERE id = '$category_id';";
					$result = mysqli_query($connected, $sql);
				}
				header("location: category_manager.php");
				exit();
			
		}
		else{
			header("location: category_manager.php?error=categoryidnotgiven");
			exit();
		}
	}