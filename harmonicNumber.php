<?php
    /**
     * harmonicNumber is for user input of n number 
     */
    require("Utility.php");
    echo "enter value to find harmonic number"."\n";
    $nInt = Utility::getInt();
    //call function harmonic number to get sum of n number 
    Utility::harmonicNumber($nInt);
    
?>