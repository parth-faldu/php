<?php
	$s1=45;
	$s2=76;
	$s3=87;
	$s4=97;
	$s5=56;

	$total=$s1+$s2+$s3+$s4+$s5;
	$p=$total/5;

	echo "---Marksheet---";
	echo "<br><br><br>subject 1 :&nbsp;".$s1;
	echo "<br><br>subject 2 :&nbsp;".$s2;
	echo "<br><br>subject 3 :&nbsp;".$s3;
	echo "<br><br>subject 4 :&nbsp;".$s4;
	echo "<br><br>subject 5 :&nbsp;".$s5;

	echo "<br><br><br><br>Total Marks:&nbsp;".$total;
	echo "<br><br>Percentage:&nbsp;".$p;
	echo "<br><br>Grade:";

	if($p>=70){
		echo "A";
	}
	else if($p<70 && $p>=60){
		echo "B";
	}
	else if($p<60 && $p>=50){
		echo "C";
	}
	else if($p<50 && $p>=40){
		echo "D";
	}
	else{
		echo "Fail";
	}
?>