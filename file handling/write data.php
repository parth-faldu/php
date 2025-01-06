<?php
	$file = fopen("abc.txt","w") or die("cant open a file");
	
	$data = "hello world !!";
	
	fwrite($file,$data);

	fclose($file);
?>