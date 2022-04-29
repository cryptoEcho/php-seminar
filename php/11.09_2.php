<?php

# константы

define("HELLO_WORLD", "Здравствуй, мир.");
echo HELLO_WORLD;

function MyFunc() {
    //const THIRD_CONST = '111';
    define('THIRD_CONST', '111');
}

//echo THIRD_CONST;

MyFunc();
echo PHP_EOL.'объявили константу '.THIRD_CONST.PHP_EOL;