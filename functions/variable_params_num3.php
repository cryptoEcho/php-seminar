<?php

/**
 * При указании типа перед ... интерпретор будет контролировать тип данных и создавать ошибку
 * @param int ...$intParams
 */
function params_int(int ...$intParams)
{
    echo "params: " . var_export($intParams, true) . PHP_EOL;
}

echo params_int(1, 'text', [1,2,3], true, new StdClass()).PHP_EOL;
