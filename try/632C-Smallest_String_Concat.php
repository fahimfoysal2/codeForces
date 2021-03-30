<?php

$looper = readline();

for ($i=0; $i < $looper; $i++) { 
    $strings[$i] = readline();
}

function my_sort($a, $b)
{
    return strlen($a) <=> strlen($b);
}

usort($strings, "my_sort");

while ($looper--) {
    echo $strings[$looper-1];
}

echo "\n";