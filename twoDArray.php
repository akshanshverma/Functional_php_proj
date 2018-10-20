<?php
    require("Utility.php");
    /**
     * fucntion 2darray is to create 2darray and take value from user to store in the 
     * array and print the array
     */
    function twoDArray()
    {
        //$m and $n to take size of array $m*$n size
        echo "enter row size"."\n";
        $m = Utility::getInt();
        echo "\n"."enter colums size"."\n";
        $n = Utility::getInt();
        //main array which will hold other array to make 2D array
        $arr = array();
        echo "enter valus"."\n";
        //for loop to store the value in the array one by one 
        for($i = 0;$i < $m; $i++)
        {
            //array to save value in row by row in main array
            $iArr = array();
            //for loop to take $n value from user 
            for($j = 0; $j < $n ;$j++ )
            {
                $iArr[$j] = trim(fgets(STDIN));
            } 
            //array push will push one array to other array
            array_push($arr,$iArr);
        }

        //for loop to print the values of array
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