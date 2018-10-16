<?php
    function gambler()
    {    
        $win = 0;
        $count = 0;

        echo "enter stack"."\n";
        $stake = Utility::getInt();
        echo "\n"."enter goal"."\n";
        $goal = Utility::getInt();
        echo "\n"."enter number of times"."\n";
        $n = Utility::getInt();
         
        for($i = 0;$i < $n; $i++)
        {
            $temp = $stake;
             while($temp != $goal && $temp != 0)
             {
                 $count++;
                 if ((random_int(0,1))==1) 
                 {
                    $temp++;
                 } 
                 else 
                 {
                     $temp--;
                 }
                 
             }
             if($temp == $goal)
             {
                 $win++;
             }

        }
        echo "no of win ".$win."\n";
        echo "count ".$count."\n";
        echo "win percentage ".(($win/$n)*100)."%"."\n";
        echo "loss percentage ".((($n-$win)/$n)*100)."%"."\n";
    }
    gambler();
?>