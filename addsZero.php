<?php
    /**
     * addsZero take intput form user the size of array and the element of array
     */
    require("Utility.php");
    echo "enter total number you want to enter"."\n";
    $n = Utility::getInt();
    $arr = array();           
    echo "\n"."enter values"."\n";
    //for loop to get value form user and save it into array
    for($in = 0;$in < $n;$in++)
    {
        $arr[$in] = Utility::getInt();
    }
    //addsToZero is function of Utility class use take array as perametre 
    Utility::addsToZero($arr);
?>