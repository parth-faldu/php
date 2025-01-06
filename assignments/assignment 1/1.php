<html>
<head>
	<style>
		table 
		{
			border: 1px solid;
			width: 50%;
			border-spacing: 0;
			position : absolute;
			top :50%;
			left:50%;
			transform:translate(-50%,-50%);
		}
		th,td
		{
			border: 1px solid;
			padding: 20px;
			text-align: center;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<th colspan=3>Student Detail</th>
		</tr>
<?php

	echo "<th>Name";
	echo "<th>gender";
	echo "<th>blood group";
	
	echo "<tr><td>parth";
	echo "<td>male";
	echo "<td>o+";
	
	echo "<tr><td>raj";
	echo "<td>male";
	echo "<td>b+";
	
	echo "<tr><td>yash";
	echo "<td>male";
	echo "<td>o-";
	
	echo "<tr><td>apurv";
	echo "<td>male";
	echo "<td>ab+";
?>
</table>
</body>
</html>
