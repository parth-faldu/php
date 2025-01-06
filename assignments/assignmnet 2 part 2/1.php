<form method="post">
    value 1:<input type="number" name="num1" required/><br>
    value 2:<input type="number" name="num2" required/><br><br>
    <input type="submit" name="submit"/><br><br>
</form>

<?php
    function math($a,$b)
    {
        echo "<br><br>Addition:",$a+$b;
        echo "<br>Subtraction:",$a-$b;
        echo "<br>Multiplication:",$a*$b;
        echo "<br>Divison:",$a/$b;
    }

    if (isset($_POST['num1']) && isset($_POST['num2']))
    {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
		
		echo "value 1:",$num1."<br>value 2:",$num2;

        math($num1,$num2);
    }
?>