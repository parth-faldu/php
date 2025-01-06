<?php
	Session_Start();
	$um = $_GET['unm'];
	$pwd = $_GET['psw'];
	$_SESSION['username'] = $_GET['unm'];
	
	if ($um == 'atmiya' && $pwd == '123')
	{
		header('Location: next2.php');
	} 
	else
	{
		echo "try again";
	}
?>
