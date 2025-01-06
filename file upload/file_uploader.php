<?php
$target_path="d:/".($_FILES['file']['name']);

if(move_uploaded_file($_FILES['file']['tmp_name'],$target_path))
{
	echo "file uploaded successfully<br><br>";
	
	//file variables 
	echo "Sent file: ".$_FILES['file']['name']."<br>"; 
    echo "File size: ".$_FILES['file']['size']." bytes<br>";
    echo "File type: ".$_FILES['file']['type']."<br>";
    echo "File tmp dir: ".$_FILES['file']['tmp_name']."<br>";
}
else
{
	echo "Sorry, file not uploaded, please try again!";
}
?>