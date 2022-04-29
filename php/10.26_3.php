<?php
declare(strict_types=1);

$arr1 = [1,3,5,7];
print_r($arr1);
echo "10 element is ".$arr1[3].PHP_EOL;
echo sizeof($arr1).PHP_EOL;
echo count($arr1).PHP_EOL;
var_dump(count($arr1));


function getArray(): array {
//    return null;
    return [1,2,3,4];
}

echo "3th element is ".getArray()[2].PHP_EOL;

$arr2 = [
    True => 1,
    1 => 2,
    2.12 => 'mn'
];
var_dump($arr2);
var_dump(boolval(1));

$arr22 = [
    [1,2,3,4,5],
    [6,7,8,9,10],
    [11,[10,1.2]]
];
var_dump($arr22);