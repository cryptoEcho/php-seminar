<?php

/**
 * Нельзя указать объект в качестве значения по умолчанию
 * Но для объектов можно указывать null по-умолчанию
 * @param StdClass $class
 */
function param_obj( StdClass $class ) {
    if( !empty( $class ) ) {
        echo "item1: ".$class->item1.PHP_EOL;
    }
    else {
        echo "object not set".PHP_EOL;
    }
}

function param_obj2( StdClass $class = null ) {
    if( !empty( $class ) ) {
        echo "item1: ".$class->item1.PHP_EOL;
    }
    else {
        echo "object not set".PHP_EOL;
    }
}


$obj1 = new StdClass();
$obj1->item1 = 'item1value';
param_obj($obj1); // корректно, передан правильный параметр
//param_obj(); // ошибка, не передан обязательный параметр
param_obj2(); // будет подставлено значение null


function param_obj3( ?StdClass $class ) {
    if( !empty( $class ) ) {
        echo "item1: ".$class->item1.PHP_EOL;
    }
    else {
        echo "object not set".PHP_EOL;
    }
}

param_obj3($obj1);
param_obj3(null);