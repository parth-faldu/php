<?php
		include "connection.php";
		
		$sql= "select *from STUDENT_INFO";
		
		if($rs=mysqli_query($con,$sql))
		{
			echo "<br>Total Rows : ".mysqli_num_rows($rs)."<br><br>";
		}
		
		echo "<table border=1 cellspacing=0>";
		
			echo "<th>Info Id</th>
			<th>Roll No</th>
			<th>Name</th>
			<th>Department</th>
			<th>Address</th>
			<th>Email</th>
			<th>Contact</th>
			<th>Birth Date</th>";
		
			while($rs1=mysqli_fetch_array($rs))
			{	
				echo "<tr>
						<td>".$rs1[0]."</td>
						<td>".$rs1[1]."</td>
						<td>".$rs1[2]."</td>
						<td>".$rs1[3]."</td>
						<td>".$rs1[4]."</td>
						<td>".$rs1[5]."</td>
						<td>".$rs1[6]."</td>
						<td>".$rs1[7]."</td>
					  </tr>";
			}
		echo "</table>";
		
		echo "<br><br><a href='index.html'>Home</a>";
?>

