<?php

include_once 'constants.php';

$array = array(
	CONST1 => 'first_item',
	CONST2 => CONST4,
	CONST3 => CONST5,
);

$result = $array[CONST2] * $array[CONST3];

// echo sprintf('The result of %d * %d is: %d', $array[CONST2], $array[CONST3], $result);

echo 'The result of ' . $array[CONST2] . ' * ' . $array[CONST3] . ' is ' . $result;

$batman = array('B', 'A', 'T', 'M', 'N');
$multi_line_string = <<<EOT
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pretium, lectus nec commodo dictum, nisl urna feugiat libero, interdum eleifend leo velit nec libero. Etiam convallis pretium dui. Nullam fringilla ex in sem accumsan eleifend. Proin at metus arcu. Curabitur accumsan dui risus, et dignissim sapien venenatis eu. Nam a auctor augue. Nulla facilisi. Praesent sit amet enim nisl. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis euismod interdum sodales. Integer et urna et nisi pellentesque venenatis ac vitae turpis. Vivamus posuere pellentesque dolor, a varius libero imperdiet eu.

    Nam vestibulum dolor bibendum elementum auctor. Cras euismod nibh vitae diam suscipit, id maximus tellus viverra. Fusce dictum nisl sed nisi venenatis mattis. Curabitur nec lacus magna. Aliquam lobortis orci sed euismod tempus. Etiam lacinia a purus nec vulputate. Pellentesque in placerat dui, non sagittis dui. Aenean vel tellus felis. Praesent malesuada tincidunt ligula. Donec enim nulla, maximus nec porttitor sit amet, consequat condimentum dui.

    {$batman[0]}{$batman[1]}{$batman[2]}{$batman[3]}{$batman[1]}{$batman[4]}

    Donec bibendum, nunc in bibendum tempor, tellus justo porta sapien, ut fringilla odio orci in justo. Nulla non felis nibh. Mauris suscipit aliquam dolor vel dapibus. Praesent ac nunc tempor, cursus velit eget, malesuada metus. Nunc urna eros, vulputate sit amet nulla ac, vehicula bibendum metus. Proin auctor lectus eget augue fringilla, ut iaculis est malesuada. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla molestie velit eget ex rhoncus, eget rutrum eros condimentum.
EOT;

echo $multi_line_string;
