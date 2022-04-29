<?php

/**
 * ... - указание, что функция принимает переменное число аргументов
 * @param mixed ...$numbers - все переданные аргументы попадают в массив $numbers
 * @return int|mixed
 */
function sum(...$numbers)
{
    echo "numbers: ".var_export($numbers, true).PHP_EOL;
    $acc = 0;
    foreach ($numbers as $n) {
        $acc += $n;
    }
    return $acc;
}

echo sum(1, 2, 3, 4).PHP_EOL.PHP_EOL;
