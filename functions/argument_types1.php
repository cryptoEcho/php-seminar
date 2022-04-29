<?php

// Объявление типов аргументов позволяет контролировать тип входных параметров
function test(bool $param)
{
    echo "param value is: ".var_export($param, true).PHP_EOL;
}

test(true); // correct
