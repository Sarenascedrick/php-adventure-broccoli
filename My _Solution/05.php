<?php

$numbers = array(10, 20, 30, 40, 50,60,70,80,90);

$sum = 0;

foreach ($numbers as $number) {
    $sum += $number;
}

echo "The sum of the numbers is: " . $sum;

?>