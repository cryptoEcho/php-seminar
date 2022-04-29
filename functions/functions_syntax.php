<?php

foo();

function foo() {
    echo "Пример функции" . PHP_EOL;
}

// ОШИБКА, неользя определять две функции с одним названием
//function foo( $arg1, $arg2 ) {
//    echo "Еще один foo с аргументами" . PHP_EOL;
//}
