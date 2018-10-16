<?php
    //to get input of year which user want to check leap year or not 
    require("Utility.php");
    echo "enter year"."\n";
    //take input from user 
    $yr = Utility::getInt();
    Utility::leapYear($yr);
?>