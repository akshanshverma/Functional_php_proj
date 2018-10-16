<?php
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
    stopWatch();

?>