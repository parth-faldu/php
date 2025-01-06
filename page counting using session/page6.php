<?php
	session_start();
?>

<link rel="stylesheet" type="text/css"href='style.css'>

<div class="container2">
	<div class="title2"><b>Page 6</b></div>
	<a href='page1.php'>Page 1 visits = <?php echo $_SESSION['p1'] ?></a>
	<a href='page2.php'>Page 2 visits = <?php echo $_SESSION['p2'] ?></a>
	<a href='page3.php'>Page 3 visits = <?php echo $_SESSION['p3'] ?></a>
	<a href='page4.php'>Page 4 visits = <?php echo $_SESSION['p4'] ?></a>
	<a href='page6.php'>Page 5 visits = <?php echo $_SESSION['p5'] ?></a>
</div>
