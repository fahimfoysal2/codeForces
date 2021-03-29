<?php
/**
 * @author fahim foysal rabby
*/

// 1. get encrypted password
$encrypted = readline();

$codes = array();
// associated array,
// get 10 'key's as input and add 0-9 as 'value'
for ($i=0; $i < 10; $i++) { 
    $x = readline();

    $codes[$x] = $i;
}

// loop 8 times ( 80/10)
for ($i=0; $i < 8; $i++) { 
    $range = $i*10;
    // get encrypted pass set as sub string
    $sub_string = substr($encrypted, $range, 10);
    // match array-key with sub_string
    echo $codes[$sub_string];
}

echo "\n";