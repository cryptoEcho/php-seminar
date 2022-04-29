<?php

$a = 10;
$b = &$a; // b ссылается на ту же область памяти, что и a
$b++;
echo "a = {$a}, b = {$b}".PHP_EOL; // a == b

$a = new StdClass();
$b = $a;
var_dump($b);
$a->newItem1 = 10;
$a->newItem = 20;
var_dump($b);

function foo(&$var){
    $var++;
}
$a = 5;
foo($a);
var_dump($a); //$a изменилось так как передали аргумент в функцию по ссылке

function fooObj(StdClass $var){
    $var -> item++;
}
