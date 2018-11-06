<?php
    /**
     * coupon number to generate the coupon number of n number 
     */
    require("Utility.php");    
    echo "enter number of coupon you want"."\n";
    $n = Utility::getInt();
    //function of Utility class which genetare coupon number 
    Utility::couponNumbers($n);
?>