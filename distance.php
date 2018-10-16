<?php
    function distance()
    {
        echo "enter x"."\n";
        $x = Utility::getInt();
        echo "enter y"."\n";
        $y = Utility::getInt();
        echo sqrt(($x*$x) +($y*$y));
    }
    distance();
?>