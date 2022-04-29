<?php

/**
 * Указание массива в качестве значения по умолчанию
 * @param array|int[] $array
 */
function param_array(array $array = [11,12,13,14] ) {
    if( !empty( $array ) ) {
        echo "array: ".var_export($array, true).PHP_EOL;
    }
    else {
        echo "array not set".PHP_EOL;
    }
}
param_array([1,2,3,4]);
param_array();
