<?php

$numbers = array(1, 2, 3);
echo median($numbers);

function median($array) { 

    sort($array); 
    }
    $count = count($array); 

    if ($count == 0) { 
        return false; 
    } elseif ($count % 2 == 0) { 
        $median = ($array[$count / 2 - 1] + $array[$count / 2]) / 2; 
    } else { 
        $median = $array[floor($count / 2)];  
    }  

    return round($median,2);

?>