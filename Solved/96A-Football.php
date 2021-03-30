<?php

$players = readline();

$length = strlen($players);

$counter = 1;

for ($i=1; $i < $length; $i++) { 
    if ($players[$i] == $players[$i-1]) {
        $counter++;
        if ($counter == 7) {
            echo "YES\n";
            exit ;
        }
    } else {
        $counter = 1;
    }
}
echo "NO\n";