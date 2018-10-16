<?php 
    /**
     * get user input that how many time he want to flip coin
     */
    require ("Utility.php");
    echo "enter n: ";
    $n = Utility::getInt();
    Utility::flipCoin($n);
?>