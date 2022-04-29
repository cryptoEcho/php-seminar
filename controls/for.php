<?php

// пример использования for
for ($i = 1; $i <= 8; $i += 2) {
    echo $i.PHP_EOL;
}

// обход массива при помощи for
$arr1 = [1,2,3,4];
print_r($arr1);
for ($i = 0; $i < count($arr1); $i++) {
    echo "a[{$i}]=".$arr1[$i].PHP_EOL;
}

$i = 0;
for(;;) {
    $i++;
    echo $i.PHP_EOL;
    if( $i > 10 ) {
        break;
    }
}
