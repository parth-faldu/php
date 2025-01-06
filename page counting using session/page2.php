<?php
	session_start();
	
	if(isset($_SESSION['p2']))
	{
		$_SESSION['p2']++;
	}
	else
	{
		$_SESSION['p2']=1;
	}
?>

<link rel="stylesheet" type="text/css"href='style.css'>

<div class="container">
	<div class="title"><b>Page 2</b></div>
	<a href='page2.php'>Page 1</a>
	<a href='page3.php'>Page 3</a>
	<a href='page4.php'>Page 4</a>
	<a href='page5.php'>Page 5</a>
	<a href='page6.php'>Page 6</a>
</div>
