<?php

$arr0 = [1, 2, 3, 17];
print_R($arr0);
$arr0[2] = 100;
print_R($arr0);


$arr = [1, 2, 3, 17];
// вариант 1 - обращение по ключу
foreach ($arr as $key => $value) {
    $arr[ $key ] = $value * 2;
}
var_dump($arr);

// вариант 2 - по ссылке
//$arr2 = [100 => 1, 2, 200 => 3, 17];
$arr2 = [1, 2, 3, 17];
foreach ($arr2 as &$value) { //   &$value  ==>  $arr2[$key]
    $value = $value * 2;
}
print_r($arr2);




