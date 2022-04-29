<?php

$str1 = "5 little rabbits";
$int1 = (int) $str1;
var_dump($int1);// outputs int(5)

$int2 = 10234;
$int2 = (string) $int2;
var_dump($int2);// string(5) "10234"
