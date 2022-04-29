<?php

function square($num): float
{
    return $num * $num;
}

echo square(4).PHP_EOL;


function return3( int $value ) {
    return [
        $value**2,
        $value**3,
        $value**4
    ];
}

list( $deg2, $deg3, $deg4 ) = return3( 3 );
var_dump( $deg2, $deg3, $deg4 );

class C {}
function getC(): C
{
    return new C;
}

function get_item(): ?string
{
    if( isset($_GET['item']) ) {
        return (string) $_GET['item'];
    }
    else {
        return null;
    }
}
