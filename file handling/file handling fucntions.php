<?php

	//to check file exists or not
	if(file_exists("abc.txt"))
	{
		echo "file already exits";
	}
	else
	{
		echo "file not exits";
	}
	
	echo "<br>";
	
	//to check file readable or not 
	if(is_readable("abc.txt"))
	{
		echo "file is readable";
	}
	else
	{
		echo "file is not readable";
	}
	
	echo "<br>";
	
	//to check file writeable or not 
	if(is_writeable("abc.txt"))
	{
		echo "file is writeable";
	}
	else
	{
		echo "file is not writeable";
	}
	
	echo "<br>";
	
	//The fgets() function is used to get line from file pointer of an open file.
	$file = fopen("abc.txt","r");
	echo fgets($file,50);
	fclose($file);
	
	echo "<br>";
	
	//fgetc() function reads a single character
	$file = fopen("abc.txt","r");
	echo fgetc($file);
	fclose($file);
	
	echo "<br>";
	
	//file() reads whole file into an array.
	print_r(file("abc.txt"));
	
	echo "<br>";
	
	//file_get_contents() reads a whole file into a string.
	echo file_get_contents("abc.txt");
	
	//file_put_contents() function writes a string to a file.
	echo file_put_contents("abc.txt","this string written by file _put_contents");
?>