<?php
    function harmonicNumber()
    {
         echo "enter value"."\n";
         $n = Utility::getInt();
         $sum = 0;
         for($i = 1; $i <= $n; $i++)
         {
             $sum += 1/$i;
         }
         echo $sum."\n";
    }
    harmonicNumber();
?>