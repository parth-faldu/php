<form method="post">
	Roll No<input type="number" name="rno" required/><br>
	Name<input type="text" name="n" required/><br>
	Deptartment<input type="text" name="d" required/><br>
	Address<textarea name="ad" rows=5 cols=20></textarea><br>
	Email<input type="email" name="e" required/><br>
	Contact<input type="tel" name="c" size="10" maxlength="10" minlength="10" required/><br>
	Birth Date<input type="date" name="b" required/><br><br><br><br>
	<input type="submit" name="s"/><br><br>
	<a href='index.html'>Home</a>
</form>

<style>
	input,textarea
	{
		display:flex;
		margin-left:100px;
		margin-top:-20px;
	}
</style>

<?php
	if(isset($_POST['s']))
	{
		include "connection.php";
		
		$rno = $_POST['rno'];
		$n = $_POST['n'];
		$d = $_POST['d'];
		$ad = $_POST['ad'];
		$e = $_POST['e'];
		$c = $_POST['c'];
		$b = $_POST['b'];
		
		$sql = "insert into STUDENT_INFO
				(Roll_no,Name,Dept,Address,Email,Contact,Birth_date)
				values($rno,'$n','$d','$ad','$e',$c,'$b');
				";
				
		mysqli_query($con,$sql);
		
		if(isset($rno,$n,$d,$ad,$e,$c,$b))
		{
			echo "<script>alert('record inserted')</script>";
		}
	}
?>