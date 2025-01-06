<?php
   if(isset($_GET['submit']))
    {
        $x=$_GET['x'];
        $y=$_GET['y'];
        $z=$_GET['z'];
    
        $max=max($x,$y,$z);
        $min=min($x,$y,$z);
        
        echo "maximum :".$max;
        echo "<br>minimum :".$min;
    }
?>