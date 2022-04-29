<?php

/**
 * Аргументы, передаваемые в функцию (при использовании ...) могут быть разных типов
 * @param mixed ...$mixedParams
 */
function params_test(...$mixedParams)
{
    echo "params: " . var_export($mixedParams, true) . PHP_EOL;
}

// передадим аргументы типа int, string, array, boolean, object(StdClass)
echo params_test(1, 'text', [1,2,3], true, new StdClass()).PHP_EOL;
