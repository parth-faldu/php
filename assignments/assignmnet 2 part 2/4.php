<form method="post">
    Age:<input type="number" name="x" required/><br><br>
    <input type="submit" name="submit"/><br><br>
</form>

<?php
    function vote($x)
    {
        if($x>=18)
        {
            echo "you are eligible for vote";
        }
        else
        {
            echo "you are not eligible for vote";
        }
    }
    
	if(isset($_POST['x']))
	{
		$x = $_POST['x'];
		vote($x);
	}
?>