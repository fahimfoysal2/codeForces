<?php

$visitors = readline();

fscanf(STDIN, "%d %d", $hour_0, $min_0);

$cash = $needed = 1;

while (--$visitors) {
    fscanf(STDIN, "%d %d", $hour, $min);
    
    if ($hour == $hour_0 && $min == $min_0) {
        $needed++;

        if ($needed > $cash) {
            $cash = $needed;
        }
    }else {
        $needed = 1;
    }

    $hour_0 = $hour;
    $min_0  = $min;
}

echo "$cash\n";

/*****

6
0 12
10 11
10 11
10 11
22 22 
22 22 

******/