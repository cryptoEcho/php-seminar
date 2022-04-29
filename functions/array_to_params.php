<?php

function add($a, $b)
{
    return $a + $b;
}

$a = [1, 2];
// распаковка массива в пару параметров
echo add(...$a).PHP_EOL;
