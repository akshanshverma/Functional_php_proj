<?php
    function twoDArray()
    {
        echo "enter row size"."\n";
        $m = Utility::getInt();
        echo "\n"."enter colums size"."\n";
        $n = Utility::getInt();
        $arr = array();
        echo "enter valus"."\n";

        for($i = 0;$i < $m; $i++)
        {
            $iArr = array();
            for($j = 0; $j < $n ;$j++ )
            {
                $iArr[$j] = trim(fgets(STDIN));
            } 
            array_push($arr,$iArr);
        }


        for($i = 0;$i < $m; $i++)
        {
            for($j = 0; $j < $n ;$j++ )
            {
                echo $arr[$i][$j]." ";
            }
            echo "\n";
        }
    }
    twoDArray();
?>