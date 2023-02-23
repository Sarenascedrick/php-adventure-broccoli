<?php

$array = ['a', 'b', 'c'];
$result = array_reduce($array, function ($previous, $current) {
    return strlen($current) > strlen($previous) ? $current : $previous;
});

 echo "Longest string is: ", $result;

?>