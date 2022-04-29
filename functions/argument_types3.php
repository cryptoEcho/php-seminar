<?php

// раскомментируйте эту строку, чтобы включить строгую проверку типов
declare(strict_types=1);

function sum(int $a, int $b)
{
    return $a + $b;
}

var_dump(sum(1, 2));
var_dump(sum(1.5, 2.5));
