<?php
    include('connection.php');
	$a=$_GET['id'];

	mysqli_query($conn,"INSERT INTO `es_archive_programs` VALUES ("$a")");
	header("location:review_programs.php");
?>