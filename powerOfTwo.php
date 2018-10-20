<?php
    /**
     * function to take use input for 2^n
     */
    require("Utility.php");
    echo "enter value"."\n";
    $n=(int) trim(fgets(STDIN));
    //while loop to check in user insert right value 
    while($n<0 || $n > 31)
    {
        echo "enter value between 0 to 31"."\n";
        $n=(int) trim(fgets(STDIN));
    }
    Utility::powerOfTwo($n);
?>