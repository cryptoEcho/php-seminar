<?php

// operator break
$arr1 = [1,2,3,4,5];

foreach ( $arr1 as $value ) {
    if( $value == 3 ) {
        // прерывание итерации и выход из цикла
        break;
    }
    echo 'val = '.$value.PHP_EOL;
}
echo 'Done'.PHP_EOL;


