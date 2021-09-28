<?php

function number($bus_stops)
{
    $peopleIn = 0;
    $peopleOut = 0;
  
    for ($i = 0; $i < count($bus_stops); $i++) {
        $peopleIn += $bus_stops[$i][0];
        $peopleOut += $bus_stops[$i][1];
    }

    return $peopleIn - $peopleOut;
}
