<?php

	$color = array('white', 'green', 'red');

	echo implode(', ', $color);

	sort($color);

	echo "<br><br>";

	foreach ($color as $c)
	{
		echo "<li>$c</li>";
	}
?>
