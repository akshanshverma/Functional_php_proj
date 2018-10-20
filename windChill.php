<?php
    require("Utility.php");
    /**
     * function wind chill is use to calculate the wind chill which take 
     * temperature in Fahrenheit and wind speed 
     * and print wind chill 
     */
    function windChill()
    {
        //temperature
        echo "enter temperature in Fahrenheit"."\n";
        $temp = Utility::getInt();

        //wind speed
        echo "enter wind speed"."\n";
        $wind = Utility::getInt();
        //print the value of wind chill
        echo "wind chill ".(35.74 + (0.6215 * $temp) + (0.4275 * $temp - 35.75) * ($wind**0.16))."\n";
    }

    windChill();
?>