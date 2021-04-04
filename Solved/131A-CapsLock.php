<?php

$input = readline();

$size = strlen($input);
$counter = 0;

for ($i=0; $i < $size; $i++) { 
    if (ord($input[$i]) <= 90) {
        $counter++;
    }
}
if ($counter == $size) {
    $input = strtolower($input);
}elseif ($counter == $size-1 && ord($input[0]) > 90) {
    $input = strtolower($input);
    $input[0] = strtoupper($input[0]);
}


echo "$input\n";