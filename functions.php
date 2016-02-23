<?php

function add($x, $y, &$z = 0) {$z = $x + $y;return $z;}
function subtract($x, $y, &$z = 0) {$z = $x - $y;return $z;}
function multiply($x, $y, &$z = 0) {$z = $x * $y;return $z;}
function divide($x, $y, &$z = 0) {$z = $x / $y;return $z;}

$result = 10000;

echo add(0, 1) . "\n";
add(1, 2, $result);
echo $result . "\n";

echo subtract(8, 5) . "\n";
subtract(5, 3, $result);
echo $result . "\n";

echo multiply(3, 7) . "\n";
multiply(17, 2, $result);
echo $result . "\n";

echo divide(55, 5) . "\n";
divide(100, 10, $result);
echo $result . "\n";

function comparison($a, $b, $datatype_compare = false) {
    echo $a == $b ? "Equal." : "Not equal.";
    if ($datatype_compare) {
        echo gettype($a) == gettype($b) ? "Equal types.\n" : "Inequal types.\n";
    } else {
        echo "\n";
    }
}

comparison(4, "4");
comparison(5, "5", true);
comparison(4, 4.0);
comparison(5, 5.0, true);
