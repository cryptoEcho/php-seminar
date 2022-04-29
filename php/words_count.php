<?php
declare(strict_types = 1);

function wordsCount(string $sourceString):array {
//    echo mb_check_encoding($sourceString, 'utf8'); // проверка кодировки
    if ($sourceString == '') // проверка наличия пустой строки
        return [];
    $sourceString = mb_strtolower($sourceString); // приведение строки к нижнему регистру
    $in_arr = explode(' ',$sourceString); // разбитие строки на массив строк. разделитель ' '

    // альтернативная реализация чистки строки
    echo $sourceString;
    $bad_symbols = ['-', '\.',',',';','"',"'", '  '];
//    $bad_symbols = ['-',',',';','"',"'", '  '];
    foreach($bad_symbols as $char){

        if (mb_stristr($sourceString, $char) !== false)
            if ($char === '  ')
                $sourceString = mb_ereg_replace($char,' ',$sourceString);
            else
                $sourceString = mb_ereg_replace($char,'',$sourceString);
    }
        // mb_detect_encoding($sourceString);
    echo $sourceString;

    $count_arr = [];
    for ($i = 0; $i < count($in_arr); $i++) {
        if ($in_arr[$i] == '') {
            $in_arr = array_merge(array_slice($in_arr, 0, $i), array_slice($in_arr, $i+1));
            $i--;
            continue;
        }
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
        if ($processed_str === '')
            continue;
            // параллельно ведём подсчёт вхождений
//            $count_arr[$in_arr[$i]] +=1; // такой вариант работает, но является нехорошим тоном. так как мы таким образом инициализируем новую переменную

            if (key_exists($processed_str, $count_arr))
                $count_arr[$processed_str] +=1;
            else
                $count_arr[$processed_str] = 1;
        }

    ksort($count_arr); // сортировка массива по ключу
    return $count_arr;
}


print_r(wordsCount(';; виндовс. w-  e  ã    !-  линукс ланукс   "" андРОU3#▬ЕЕЕД~    --..  линукс ЛИНУК,с лин--ук..с'));
print_r(wordsCount('так давайте пожмём руки так, чтобы это чувстововалось весь путь'));
print_r(wordsCount('Раз Два    Три Четыре Пять Скажем без подвоха Раз два три Четыре Пять Жадность - это плохо ╚'));
print_r(wordsCount('Кот кот кОт оЛень'));
print_r(wordsCount('Первый, второй. Первый-второй. Третий1'));
print_r(wordsCount('Первый, второй. Первый-втор"о"й. Третий""1'));
print_r(wordsCount("Первый, второй. Первый-второ'й. 'Т'ре''тий'1"));
