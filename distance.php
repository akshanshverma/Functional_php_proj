<?php
    require("Utility.php");
    //x and y are coordinates to find distance 
    echo "enter x"."\n";
    $x = Utility::getInt();
    echo "enter y"."\n";
    $y = Utility::getInt();
    //distance method is to return distance from zero
    echo "distance ".Utility::distance($x ,$y)."\n";
?>