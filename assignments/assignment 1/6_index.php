<html>
	<title>Calculator</title>

<style>
	input[type="submit"] {
  		background-color: lightblue;
  		border-color: black;
		border-style: solid;
	}
	.add{
		margin-left:30px;
	}
	.min{
		margin-left:100px;
	}
	.div{
		margin-top:05px;
		margin-left:32.5px;
	}
	.mul{
		margin-left:102.5px;
	}
</style>

<body bgcolor=lightpink>

	<form action="6.php" method="get">
		enter number 1:
		<input type="number" name="num1"><br><br>
		
		enter number 2:
		<input type="number" name="num2"><br><br>
	
	<div>
		<input type="submit" name="operator" value="add" class=add>
		<input type="submit" name="operator" value="min" class=min><br>
		<input type="submit" name="operator" value="div" class=div>
		<input type="submit" name="operator" value="mul" class=mul>
	</div>

	</form>
	
</body>
</html>