<?php

$arr = [1, 2, 3, 17];
$i = 0;
// вариант 1 - обращение по ключу
foreach ($arr as $key => $value) {
    echo $key.'='.$value.PHP_EOL;
    if( $i++>1 ) {
        break;
    }
}
echo "finished first foreach".PHP_EOL;
foreach ($arr as $key => $value) { // starting fro mthe first element again
    echo $key.'='.$value.PHP_EOL;
}

