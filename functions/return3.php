<?php

function returnInt( int $a ): int
{
    // this function should return int
    if( $a > 10 ) {
        return 2;
    }
    elseif ( $a < 0 ) {
        return -2;
    }
    // if we come here, we do not return anything
}

var_dump( returnInt( -5 ) );
var_dump( returnInt( 5 ) );

