<?php
	include 'connection.php';
	
	$id = $_GET['id'];
	
	$sql = "delete from STUDENT_INFO
			where Info_Id = $id;
			";
			
	mysqli_query($con,$sql);
	header("Location:4 delete.php");
	mysqli_close($con);
?>