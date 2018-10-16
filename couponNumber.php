<?php
    function couponNumbers()
    {
        $arr = array();
        echo "enter number of coupon yoou want"."\n";
        $n = Utility::getInt();
        $i = 0;
        $count = 0;
        $index = 0;
        while(sizeof($arr) != $n)
        {
            $count++;
            $num = random_int(10,($n+100));
            if(!array_search("cou".$num."pon",$arr))
            {
                $arr[$index++] = ("cou".$num."pon");
            }
        }

        echo "count ".$count."\n";

        foreach ($arr as $print) {
            echo $print."\n";
        }
    }
    couponNumbers();
?>