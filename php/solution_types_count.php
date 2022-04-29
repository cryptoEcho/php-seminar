<?php
// для работы enum требуется PHP 8.1!!!
enum Types: string {
    case b = 'boolean';
    case i = 'integer';
    case f = 'float';
    case s = 'string';
    case o = 'object';
    case a = 'array';

    static function lst() {
        $lst = [];
        foreach (self::cases() as $key => $value)
            $lst[$value -> value] = 0;
        return $lst;
    }
}

function typesCounter(...$types):?array {
    $array_quantity = Types::lst();
    foreach ($types as $value) {
        if (gettype($value) === 'double')
            $check = Types::f;
        else
            $check = Types::tryFrom(gettype($value));
        // null будет всегда, когда такого значения енама нет
        if ($check === null)
            return null;
        $array_quantity[$check -> value] ++;
    }
    unset($value);
    return $array_quantity;
}
