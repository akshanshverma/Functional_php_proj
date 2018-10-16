<?php
    /**function powerOfTwo */
    function powerOfTwo()
    {    echo "enter value"."\n";
        $n = (int) trim(fgets(STDIN));
        if ($n >= 0 && $n < 31) {
            $pow = 2**$n;
            $all = 0; $count = 1;
            while($all != $pow)
            {
                $all = 2** $count;
                echo $all."\n";
                 $count++;
            }
        } else {
            echo "enter value between 0 to 31"."\n";
            Utility::powerOfTwo();
        }        
    }
    powerOfTwo();
?>