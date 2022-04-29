<?php

function wordsCount(string $sourceString):array {
    if ($sourceString == '') // проверка наличия пустой строки
        return [];
    $sourceString = mb_strtolower($sourceString); // приведение строки к нижнему регистру
    $in_arr = explode(' ',$sourceString); // разбитие строки на массив строк. разделитель ' '
    $count_arr = []; // массив для подсчёта вхождений
    for ($i = 0; $i < count($in_arr); $i++) {
        if ($in_arr[$i] == '') { // обработка лишних пробелов
            $in_arr = array_merge(array_slice($in_arr, 0, $i), array_slice($in_arr, $i+1));
            $i--;
            continue;
        }
        // обработка недопустимых символов
        $arr = mb_str_split($in_arr[$i]);
        foreach($arr as &$value) {
            if ($value == '-' or
                $value == ',' or
                $value == '.' or
                $value == ';' or
                $value == ':' or
                $value == '"' or
                $value == "'") {
                $value = '';
            }
        }
        // обработанная строка
        $processed_str = implode($arr);
        if ($processed_str === '') // если слово состояло только из недопустимых символов, то переходим к следующему
            continue;

            // подсчёт вхождений
            if (key_exists($processed_str, $count_arr))
                $count_arr[$processed_str] +=1;
            else
                $count_arr[$processed_str] = 1;
        }

    ksort($count_arr);
    return $count_arr;
}