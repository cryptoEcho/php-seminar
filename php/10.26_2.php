<?php

// Массивы. Набор пар ключ => значение

$arr1 = ([1,2,3,4,5]);
$arr2 = array(
    0 => 1,
    1 => 2,
    3 => 4,
    'lo' => 20
);
var_dump($arr2);

$arr3 = [
    1,2,3,5,
    13 => 4,
    8,null
];
var_dump($arr3);

$arr4 = [1,2,3,5];
print_r($arr4);
$arr1[10] = 15;
print_r($arr4);
$arr4[1] = 100;
print_r($arr4);
unset($arr4[1]);
print_r($arr4);
//unset($arr4);
//print_r($arr4[0]);
$arr4[]=5;
print_r($arr4);
for($i = 1; $i<5; $i++) {
    $arr2[] = $i**2;
    array_push($arr4, i**2);
}
//array_push();
//array_pop();

