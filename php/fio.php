<?php

function getInitials(string $FIO):?string{
    if ($FIO === ''){
        return null;
    }
    $in_arr = explode(' ',$FIO);
    if (!key_exists(1, $in_arr) || $in_arr[1] === ''){ // отсутствует второе слово
        return null;
    }

    // Форматирование Фамилии
    $arrLN = mb_str_split($in_arr[0]);
    $flag = true;
    foreach ($arrLN as $key => &$value){
        if ($value == '-'){
            $flag = true;
            continue;
        }
        if ($flag){
            $value = mb_strtoupper($value);
            $flag = false;
        }
        else{
            $value = mb_strtolower($value);
        }
    }
    unset($key);
    unset($value);
    $out_arr[0]= implode($arrLN);

    // Форматирование Имени
    $out_arr[1]= '';
    $flag = true;
    if (in_array('-', mb_str_split($in_arr[1]))){
        foreach (mb_str_split($in_arr[1]) as $key => $value){
            if ($value === '-'){
                $out_arr[1] .= '.-';
                $flag = true;
                continue;
            }
            if ($flag) {
                $out_arr[1] .= mb_strtoupper($value);
                $flag = false;
            }
        }
        unset($key);
        unset($value);
    }else{
        $out_arr[1] = mb_strtoupper(mb_substr($in_arr[1], 0,1));
    }

    $FIO = $out_arr[0].' '.$out_arr[1].'.';

    if (!key_exists(2, $in_arr)){ // в случае отсутствия отчества
        return $FIO;
    }

    // Форматирование Отчества
    $i = 2;
    while (array_key_exists($i, $in_arr)){ //обработка произвольного количества слов, которые будут являться отчеством
        $out_arr[$i]= '';

        //Работа с одним словом, которое может содержать дефис
        $flag = true;
        if (in_array('-', mb_str_split($in_arr[$i]))){ // содержит дефис
            foreach (mb_str_split($in_arr[$i]) as $key => $value){
                if ($value === '-'){
                    $out_arr[$i] .= '.-';
                    $flag = true;
                    continue;
                }
                if ($flag) {
                    $out_arr[$i] .= mb_strtoupper($value);
                    $flag = false;
                }
            }
            unset($key);
            unset($value);
        }else{ //не содержит дефис
            $out_arr[$i] = mb_strtoupper(mb_substr($in_arr[$i], 0,1));
        }

        $FIO .= $out_arr[$i].'.';
        $i++;
    }

    return $FIO;
}

echo getInitials('Петя Пяточкин');