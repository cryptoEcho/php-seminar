<?php

// раскомментируйте эту строку, чтобы включить строгую проверку типов
declare(strict_types=1);

function factorial(?int $N)
{
    if( is_null($N) ) {
        return 0;
    }
    if( empty( $N ) ) {
        return 1;
    }
    return $N * factorial( $N-1 );
}

var_dump(factorial(5));
var_dump(factorial(null));
