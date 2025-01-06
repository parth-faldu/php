<?php
	$file = fopen("abc.txt","r") or die("cant open a file");
	
	$data = fread($file,filesize("abc.txt"));
	
	echo $data;
	
	fclose($file);
?>