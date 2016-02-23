<?php

include_once 'math.php';

$math = new Math();

echo $math->add(1, 2) . "\n";
echo $math->add(1, 2, 3) . "\n";
echo $math->add(1, 2, 3, 1000) . "\n";

echo $math->subtract(100, 20) . "\n";
echo $math->subtract(100, 20, 10) . "\n";
echo $math->subtract(100, 20, 10, 5) . "\n";

echo $math->multiply(1, 2) . "\n";
echo $math->multiply(1, 2, 3) . "\n";
echo $math->multiply(1, 2, 3, 4) . "\n";

echo $math->divide(48, 2) . "\n";
echo $math->divide(48, 2, 2) . "\n";
echo $math->divide(48, 2, 2, 2) . "\n";
