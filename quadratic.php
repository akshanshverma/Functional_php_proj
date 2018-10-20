<?php
    require("Utility.php");
    /**
     * fucction quadratic is use to take value of quadratic 
     * equation and print the roots of the equation
     * 
     * @param $a a of quadratic equation
     * @param $b b of quadratic equation
     * @param $c c of quadratic equation
     */
    function quadratic($a,$b,$c)
    {
        //to find delta value of equation and this valus is always positive
        $delta = abs((($b*$b) - (4*$a*$c)));
        //formula to claculate the roots of equation
        $root1 = (-$b + sqrt($delta))/(2*$a);
        $root2 = (-$b - sqrt($delta))/(2*$a);
        
        echo "root are\n".$root1." ".$root2."\n";
    }
    echo "enter a"."\n";
    $A = Utility::getInt();
    echo "enter b"."\n";
    $B = Utility::getInt();
    echo "enter c"."\n";
    $C = Utility::getInt();
    quadratic($A,$B,$C);    
?>