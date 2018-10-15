<?php
require("Utility.php");
    function quadratic()
    {
        echo "enter a"."\n";
        $a = Utility::getInt();
        echo "enter b"."\n";
        $b = Utility::getInt();
        echo "enter c"."\n";
        $c = Utility::getInt();

        $delta = abs((($b*$b) - (4*$a*$c)));
        $root1 = (-$b + sqrt($delta))/(2*$a);
        $root2 = (-$b - sqrt($delta))/(2*$a);

        echo $root1." ".$root2;
    }
    quadratic();    
?>