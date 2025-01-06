<?php 
	include "connection.php";
	
	$sql = "create table STUDENT_INFO 
			(
				Info_id int(3) primary key auto_increment,
				Roll_no Int(5),
				Name Varchar(20),
				Dept Varchar(20),
				Address Varchar(50),
				Email Varchar(30),
				Contact Int(10),
				Birth_date Date
			)";
			
	$table = "SHOW TABLES LIKE 'STUDENT_INFO' ";
	
	$rs = mysqli_query($con, $table);
	
	if(mysqli_num_rows($rs) > 0)
	{
		echo "Table Already Exists..";
	}
	else
	{
		mysqli_query($con,$sql);
		echo "table created";
	}
	echo "<br><br><a href='index.html'>Home</a>";
	mysqli_close($con);
?>