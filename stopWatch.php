<?php
    require("Utility.php");
    /**
     * function stop to take user input as one for start and 2 for stop watch
     * and calculate the time between start and stop watch and print
     */
    function stopWatch()
    {
        //st for store start time 
        //sp to store stop time
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
        //calculate time between start and stop and print
        echo ($sp - $st)." sec";
        
    }
    stopWatch();

?>