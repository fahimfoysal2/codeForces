<?php
// word length
$length = (int)readline();

// checker will say if word length is odd / even
// odd  = previous state + current letter 
// even = current letter + previous state
$checker = $length;

$word = readline();

$decoded = "";

for ($i=0; $i < $length; $i++) { 
    if ($checker%2 == 0) {
        $decoded = $word[$i].$decoded;
    }else {
        $decoded = $decoded.$word[$i];
    }

    $checker--;
}
echo $decoded."\n";