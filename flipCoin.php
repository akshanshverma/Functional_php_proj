<?php
    /**
    * flipCoin function take input the number of times to flip Coin.
    * and print percent of head and tail.
    */
    function flipCoin()
    {    
        //h and t to count head and tails.
        $h=0;
        $t=0;
        echo "enter n: ";
        $n = trim(fgets(STDIN));
        $n = filter_var($n,FILTER_VALIDATE_INT);
        if(is_numeric($n))
        {
            for($i = 0;$i<$n;$i++)
            {
                if (random_int(0,1)==1) 
                {
                    $t++;
                } 
                else 
                {
                    $h++;
                }
            }
            echo ($h/($h+$t))*100;
            echo "% head"."\n";
            echo ($t/($h+$t))*100;
            echo "% tail"."\n";
        }
        else
        {
            echo "enter valid value"."\n";
            Utility::flipCoin();
        }
    }
    flipCoin();
?>