<?php

$a = 1.234; // 1й вариант записи
$b = 1.2e3; // 2й вариант записи
$c = 7E-10; // 3й вариант записи

echo 'тип переменной A = '.gettype($a).', float: '.is_float($a).' значение: ';
var_dump($a);

$b = (int) $b;
echo "B = ".$b.PHP_EOL;

//var_dump($c);
