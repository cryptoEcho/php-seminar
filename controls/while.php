<?php

$i = 1;
while ($i <= 5) { // пока выполняется это условие
    // повторять эти инструкции
    // один такт выполнния - одна итерация
    echo $i++.PHP_EOL;
}

$i = 0;
do {
    echo $i;
} while( $i>0 ); // выполнится только 1 раз
