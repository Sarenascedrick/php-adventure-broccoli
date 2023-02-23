<?php

$length = 12; 
$upperCaseLetters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
$lowerCaseLetters = 'abcdefghijklmnopqrstuvwxyz'; 
$numbers = '0123456789'; 
$specialCharacters = "!@#$%^&*()-+?"; 

    $passwordCharset = $upperCaseLetters . $lowerCaseLetters . $numbers . $specialCharacters;

    for ($i=0; $i < $length ; ++$i) { 

        echo substr($passwordCharset, random_int(0, strlen($passwordCharset) - 1), 1); 

    }

?>