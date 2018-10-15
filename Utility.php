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

       public function getInt()
       {
            fscanf(STDIN,"%d\n",$n);
            while(!is_numeric($n))
            {
                echo "enter numeric value"."\n";
                fscanf(STDIN,"%d\n",$n);
            }
            return $n;     
       }

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

       public function addsToZero()
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

       function distance()
       {
           echo "enter x"."\n";
           $x = Utility::getInt();
           echo "enter y"."\n";
           $y = Utility::getInt();
           echo sqrt(($x*$x) +($y*$y));
       }

       function stopWatch()
       {
           $st = 0; $sp = 0;
           echo "press 1 to start watch"."\n"."press 2 to stop watch"."\n";
           $start = Utility::getInt();
           if($start == 1)
           {
               $st = time();
           }
           $stop = Utility::getInt();
           if($stop == 2)
           {
               $sp = time();
           }

           echo ($sp - $st)." sec";
           
       }

       
   }
  
?>
