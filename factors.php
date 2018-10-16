<?php
    /**
     * factor is to take input number and print prime factors of that number 
     */
    require("Utility.php");    
    echo "enter number"."\n";
    $n = Utility::getInt();
    Utility::factors($n);
?>