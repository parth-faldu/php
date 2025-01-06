<?php
	$name = "parth";
	
	setcookie("username","$name",time()+3600,"/","",0);
	
	if(isset($_COOKIE['username']))
	{
		echo "welcome ".$_COOKIE['username'];
	}
	else
	{
		echo "welcome guest";
	}
	
	echo "<br><br>";
	
	//to view all cookies 
	print_r($_COOKIE);
	
	//delete cookies
	//setcookie("username","",time()-3600);
?>