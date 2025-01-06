<form method="POST">
	String:<input type="text" name="str" required/><br><br>
	<input type="checkbox"	name="font" value="underline" onclick="check(this)"/>underline<br>
	<input type="checkbox"	name="font" value="italic" onclick="check(this)"/>italic<br>
	<input type="checkbox"	name="font" value="bold" onclick="check(this)"/>bold<br><br>
	<input type="submit" name="submit"/>
</form>

<script>
	function check(checkbox) 
	{
		var checkboxes = document.getElementsByName(checkbox.name);

		for(var i = 0; i<checkboxes.length; i++)
		{
			if(checkboxes[i] !== checkbox)
			{
				checkboxes[i].checked = false;
			}
		}
	}
</script>

<?php
	if(isset($_POST['submit']))
	{
		$str=$_POST['str'];
		$font=$_POST['font'];
	
		switch($font)
		{
			case 'underline':
				echo "<u>".$str."</u>";
				break;
			
			case 'italic':
				echo "<i>".$str."</i>";
				break;
			
			case 'bold':
				echo "<b>".$str."</b>";
				break;		
		}
	}
?>


