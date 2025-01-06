<form method='POST'>

<input type="text" name="em">

<input type="submit" name="s" value="submit">

</form>



<?php

$s = $_POST['s'];
$email = $_POST['em'];

if(isset($s,$email))
{
	//using regular expression with preg match function
	
	if(preg_match("/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/",$email))
	{
		echo "Correct";
	}
	else
	{
		echo "Incorrect";
	}	
	
	
	//using filter_var function
	
	if(filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		echo "<br>valid";
	}
	else
	{
		echo "<br>invalid";
	}
	
}

?>

