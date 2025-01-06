<form method="post">
    length:<input type="number" name="l" required/><br>
    width:	<input type="number" name="w" required/><br><br>
    <input type="submit" name="submit"/><br><br>
</form>

<?php
    function math($l,$w)
    {
        $area = $l * $w;
        echo "rectangle of length $l and width $w has an area of $area";
    }
 
    if (isset($_POST['l']) && isset($_POST['w']))
    {
        $l = $_POST['l'];
        $w = $_POST['w'];

		math($l,$w);
    }
?>
</div>
