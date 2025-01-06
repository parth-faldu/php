<?php 
	$num1 = $_GET['num1'];
	$num2 = $_GET['num2'];
	$operator = $_GET['operator'];
	
	echo "value 1=",$num1."<br>";
	echo "value 2=",$num2;

	switch ($operator)
	{
		case 'add':
			echo "<br><br>Addition:",$num1 + $num2;
			break;
			
		case 'min':
			echo "<br><br>Subtraction:",$num1 - $num2;
			break;
			
		case 'mul':
			echo "<br><br>Multiplication:",$num1 * $num2;
			break;
			
		case 'div':
			if ($num2 == 0)
			{
				echo "Cannot divide by zero";
			}
			else
			{
				echo "<br><br>Divison:",$num1 / $num2;
			}
			break;
	}
?>