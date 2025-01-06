<style>
	p
	{
		font-size:50px;
	}
</style>

<?php
	$str=$_GET['str'];
	$font=$_GET['font'];
	$clr=$_GET['clr'];
	
	switch($font)
	{
		case 'David':
			echo "<p style=\"font-family:David; color:$clr;\">".$str;
			break;
			
		case 'Broadway':
			echo "<p style=\"font-family:Broadway; color:$clr;\">".$str;
			break;
			
		case 'Impact':
			echo "<p style=\"font-family:Impact; color:$clr;\">".$str;
			break;
	}
?>