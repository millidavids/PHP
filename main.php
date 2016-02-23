<?php

include_once 'constants.php';

$array = array(
	CONST1 => 'first_item',
	CONST2 => CONST4,
	CONST3 => CONST5,
);

$result = $array[CONST2] * $array[CONST3];

echo sprintf('The result of %d * %d is: %d', $array[CONST2], $array[CONST3], $result);
