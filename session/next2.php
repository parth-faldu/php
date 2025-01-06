<?php
	Session_Start();
	echo "Welcome to our site " . $_SESSION['username'] . "<br>";
	echo "<a href='logout.php'>LOGOUT</a>";
?>
