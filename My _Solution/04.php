<?php

function sumDigits($number) {
    $sum = 0;  
    while ($number != 0) {  
        $digit = $number % 10;  
        $sum += $digit;  
        $number = intval($number / 10);  
    }
    return $sum;  
}

$number = readline("Enter a number: ");

$sum = sumDigits($number);

echo "The sum of digits in $number is $sum\n";

?>



