<?php

# Подключение библиотек, файлов, функций

echo 'current dir:'.__DIR__.PHP_EOL;
echo 'before include, function getBMI exists:';
var_dump(function_exists('getBMI'));

include __DIR__.'/solution_bmi.php';

echo 'after include, function getBMI exists:';
var_dump(function_exists('getBMI'));
echo realpath('solution_bmi.php');

include_once('solution_bmi.php');