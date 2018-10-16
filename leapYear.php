<?php
    /**function leapYear is use to check the year is leap year or not it 
    * take input form use and print year is leap or not 
    */
    function leapYear()
    {
        echo "enter year"."\n";
        //take input from user 
        $yr = (int) trim(fgets(STDIN,5));
        
         if (strlen((string)$yr)==4) {
             //check year is leap or not
             if ((($yr % 4 == 0) && ($yr % 100 != 0)) || ($yr % 400 == 0)) 
             {
             echo "leap year"."\n";
             } 
             else 
             {
                 echo "not leap year"."\n";
             }
            
         } else {
             echo "enter valid input"."\n";
             Utility::leapYear();
         }         
    }
    leapYear();
?>