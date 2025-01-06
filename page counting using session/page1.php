<?php
	session_start();
	
	if(isset($_SESSION['p1']))
	{
		$_SESSION['p1']++;
	}
	else
	{
		$_SESSION['p1']=1;
	}
?>

<link rel="stylesheet" type="text/css"href='style.css'>

<div class="container">
	<div class="title"><b>Page 1</b></div>
	<a href='page2.php'>Page 2</a>
	<a href='page3.php'>Page 3</a>
	<a href='page4.php'>Page 4</a>
	<a href='page5.php'>Page 5</a>
	<a href='page6.php'>Page 6</a>
</div>
