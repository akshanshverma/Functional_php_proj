<?php
require("Utility.php");
    function windChill()
    {
       
        echo "enter temperature in Fahrenheit"."\n";
        $temp = Utility::getInt();
        echo "enter wind speed"."\n";
        $wind = Utility::getInt();

        echo "wind chill ".(35.74 + (0.6215 * $temp) + (0.4275 * $temp - 35.75) * ($wind**0.16))."\n";
    }

    windChill();
?>