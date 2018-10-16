<?php
    function factors()
    {    echo "enter value"."\n";
        $n = Utility::getInt();
        $arr = array();
        $i = 2;
        $index = 0;
        while($n != 1)
        {
            $b = true;
            for($j = 2; $j < $i/2; $j++)
            {
                if($i % $j == 0)
                {
                    $b = false;
                    break;
                }
            }
            if($b)
            {
                while($n % $i == 0)
                {
                    $arr[$index++] = $i;
                    $n = $n / $i;
                }
            }
             $i++;
        }

        foreach($arr as $print)
        {
            echo $print."\n";
           
        }
    }
    factors();
?>