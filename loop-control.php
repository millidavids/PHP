<?php

$numbers = array();
foreach (range(0, 100, 3) as $i) {array_push($numbers, $i);}

$num = 0;
do {
    if (array_search($num, $numbers) == 0) {
        echo "First number.\n";
    } elseif (array_search($num, $numbers) == sizeof($numbers) - 1) {
        echo "Last number.\n";
    } elseif ($num % 7 == 0) {
        echo sprintf("Sevens are lucky, the number has %d.\n", $num / 7);
    } elseif ($num % 10 == 0) {
        echo "{$num} is a round number.\n";
    }
    $num += 3;
} while ($num <= 100);
