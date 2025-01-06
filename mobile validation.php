<?php
	$mobile = "9458639829";
	
	//using built-in fucntions
	
	if(empty($mobile))
	{
		echo "field is empty";
	}
	else 
	{
		if(is_numeric($mobile))
		{
			echo "number is valid";
		}
		else
		{
			echo "number must be in digits !!";
		}
	}
	
	
	//using regular expression
	
	if(preg_match("/^[0-9]{10}+$/",$mobile))
	{
		echo "<br>valid";
	}
	else
	{
		echo "<br>not valid";
	}
?>