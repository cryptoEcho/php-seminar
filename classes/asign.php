<?php

$a = 10; // -> a   10
$b = $a; // -> b   10
$a = 20; // a= 20  b =10

$aObj = new StdClass();  // -> aObj ->
$aObj->var1 = 10;

$bObj = $aObj; // не создается новой переменной

$cObj = new StdClass();
//clone
