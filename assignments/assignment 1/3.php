<?php
	$a="10";
	$b="20";

	$sum=$a+$b;
	$sub=$a-$b;
	$mul=$a*$b;
	$div=$a/$b;
?>

<html>
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
		.head
		{
			font-size:25px;
		}
</style>
<body>

	<table>

		<th class=head>Operations</th>
		<th class=head>Answer</th>
		
		<tr>
			<th>Value of A:</th>
			<?php echo "<td>".$a."</td>"?>
		</tr>

		<tr>
			<th>Value of B:</th>
			<?php echo "<td>".$b."</td>"?>
		</tr>

		<tr>
			<th>Addition of A and B:</th>
			<?php echo "<td>".$sum."</td>"?>
		</tr>

		<tr>
			<th>Subtraction of A and B:</th>
			<?php echo "<td>".$sub."</td>"?>
		</tr>

		<tr>
			<th>Multiplication of A and B:</th>
			<?php echo "<td>".$mul."</td>"?>
		</tr>

		<tr>
			<th>Division of A and B:</th>
			<?php echo "<td>".$div."</td>"?>
		</tr>
</table>
</body>
</html>