<?php
$limak = $bob = 0;

fscanf(STDIN, "%d %d", $limak, $bob);

$years_needed = 0;

while (1) {
    $years_needed++;
    $limak *= 3;
    $bob *= 2;

    if ($limak > $bob) {
        echo "$years_needed\n";
        exit;
    }
}