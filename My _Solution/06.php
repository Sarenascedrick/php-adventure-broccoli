<?php

function triangular($n) {
    return ($n * ($n + 1)) / 2;
}

$n = readline("Enter the number of triangular numbers to generate: ");

for ($i = 1; $i <= $n; $i++) {
    $triangular = triangular($i);
    echo "$i: $triangular\n";
}

?>



