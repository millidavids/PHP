<?php

$numbers = array();
foreach (range(0, 100, 3) as $i) {array_push($numbers, $i);}

foreach ($numbers as $num) {
    switch ($num) {
    case 3:
        echo str_repeat('Three', 1);
        break;
    case 9:
        echo str_repeat('Nine', 3);
        break;
    case 15:
        echo str_repeat('Fifteen', 5);
        break;
    }
}
