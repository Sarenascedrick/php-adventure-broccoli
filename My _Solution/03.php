<?php

$str = 'This is a string';
$arr = str_split($str);
foreach ($arr as $value) {
    echo $value . ':'. substr_count($str, $value).'<br>';
}

?>