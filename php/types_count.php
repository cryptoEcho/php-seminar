<?php
declare(strict_types=1);
enum Typest
{
    case integer;
    case string;
    case float;
    case boolean;
    case object;
    case array;

    static function lst()
    {
        $lst = [];
        foreach (self::cases() as $key => $value) {
            $lst[$value->name] = 0;
        }
//            print_r($lst);
        return $lst;
    }
}

function typesCounter(...$types):?array {

    /**
     * @method static gettype(mixed $value)
     */
    enum Types: string {
        case boolean = 'boolean';
        case integer = 'integer';
        case float = 'float';
        case string = 'string';
        case object = 'object';
        case array = 'array';

        static function lst() {
            $lst = [];
            foreach (self::cases() as $key => $value) {
                $lst[$value -> name] = 0;
            }
//            print_r($lst);
            return $lst;
//            return [
//                Types::boolean -> name => 0,
//                Types::integer -> name => 0,
//                Types::float -> name => 0,
//                Types::string -> name => 0,
//                Types::object -> name => 0,
//                Types::cases()
//            ];
        }
    }


    try {
        $array_quantity = Types::lst();
        foreach ($types as $value) {
            if (gettype($value) === 'double')
                $check = Types::float;
            else
                $check = Types::tryFrom(gettype($value));
            // null будет всегда, когда такого значения енама нет
            if ($check === null)
//                unset(Types::class);
                return $check;
            $array_quantity[$check -> name] ++;
        }
        unset($value);
    }
    catch (Exception $e) {
        return null;
    }

    // ['type': quantity]
    return $array_quantity;
}


//$val = Types::boolean;
$a = [true, 2, 1];
$a = [1,1,2,2,2,3,3,4,0,45,5,5,0,5,0,5,2,3,2,0,1,[0,true],true,Typest::string, null];
$a = [Typest::string,[], null];
$a = [1, 3, 'test', 7, 'antother string', 7.16, 1.2e3, 'hoho', 10, true];
print_r(typesCounter('test',new StdClass, false));
print_r(typesCounter(...$a));

print('bye');

