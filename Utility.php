<?php
    /**
     * 
     * Purpose: Utility is a helper class which hold funtion.
     *
     *  @author  Akshansh Verma
     *  @version 1.0
     *  @since   12-10-2018
     */
   class Utility{
       /**
        * replaceF function is use to take user name is replace tha "<<UserName>>"
        * template to the nam of the user
        */
       function replaceF()
       {
            $template = "Hello <<UserName>>, How are you?";
            $S = readline("enter name : ");
            //str_replace to replace  <<UserName>> from template
            echo str_replace("<<UserName>>", $S , $template)."\n";
       }

       /**
        * flipCoin function take input the number of times to flip Coin.
        * and print percent of head and tail.
        */
       function flipCoin()
       {    //h and t to count head and tails.
            $h=0;
            $t=0;
            echo "enter n: ";
            $n = trim(fgets(STDIN));
            $n = filter_var($n,FILTER_VALIDATE_INT);
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
       function LeapYear()
       {
           $yr = trim(fgets(STDIN,4));
           $yr = filter_var($yr,FILTER_VALIDATE_INT);

            if ($yr % 4 == 0 || $yr % 100 == 0 || $yr % 400 == 0) 
            {
               echo " is leap year";
            } 
            else 
            {
                echo " is not leap year";
            }
       }
   }

  
   $o = new Utility();
   $o->LeapYear();

?>
