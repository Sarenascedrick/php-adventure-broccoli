<?php

$numbers = [3,23,42,53,52,2,523,4,1];
$sum = 0;
foreach ($numbers as $number) {
    $sum += $number;
}
echo "The average is: ". ($sum / count($numbers));

?>