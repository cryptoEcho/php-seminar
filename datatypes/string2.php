<?php

////$stringA = "Hello, world!".PHP_EOL;
//$stringA = 'Hello, world!'.PHP_EOL;
//echo $stringA;
//
////echo "Please, enter you name: ";
////// преобразование к типу string
////$name = (string)fgets(STDIN);
////$name = trim($name);
////// экранирование кавычек, автоматическая подстановка значения переменной
////$str2 = "Hello, \"$name\", how are you?";
////echo $str2;
//
//
//// одинарные кавычки безопаснее
//$name = 'Vasya2';
//$var = ['name' => 'Petr'];
//$safeString = "My name is $name, How are you";
////$safeString = "My name is {$name}, How are you";
////$safeString = "My name is {$var['name']}, How are you";
//$safeString = 'My name is $name, How are you';
//$safeString2 = 'My name is '.$var['name'].', How are you';
////$output = $safeString.$safeString2;
//echo $safeString.PHP_EOL;
//echo $safeString2.PHP_EOL;
//echo $safeString.$safeString2;

//$a += $b; => $a = $a + $b
//$a = 10; //'1e10';
////$a = $a . $safeString2;
//$a .= $safeString2;
//echo $a.PHP_EOL;
//
$arrStr = 'a, b, c, d, e';
$arr = explode(', ', $arrStr);
var_dump($arr);

$arrStr2 = "1-2-3-4-5";
$arr2 = explode('-', $arrStr2);
var_dump($arr2);
//$arr2 = array_map('intval', $arr2);
//var_dump($arr2);

$str2 = "12342342135";
echo "type str2: ".gettype($str2).PHP_EOL;
$int2 = intval($str2); //strval(); boolval(); floatval();
//(int) (float) (bool) $arrStr2;
//$int2 = (int) $str2;

