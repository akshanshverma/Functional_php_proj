<?php
    function addsToZero()
    {
        echo "enter total number you want to enter"."\n";
        $arr = array();
        $n = Utility::getInt();
        echo "\n"."enter values"."\n";
        for($in = 0;$in < $n;$in++)
        {
            $arr[$in] = Utility::getInt();
        }

        $count = 0;

        for($i = 0; $i < $n; $i++)
        {
            for($j = $i + 1; $j < $n; $j++)
            {
                for($j2 = $j + 1; $j2 < $n; $j2++)
                {
                    if($arr[$i]+$arr[$j]+$arr[$j2]==0)
                    {
                        echo $arr[$i]." + ".$arr[$j]." + ".$arr[$j2]." = 0"."\n";
                        $count++;
                    }

                }
            }
        }
        echo "total sum ".$count;
    }
    addsToZero();
?>