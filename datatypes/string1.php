<?php

$stringA = "Hello, world!";

// работасострокой как с массивом
for ( $i=0; $i<strlen($stringA); $i++ ) {
    echo "Symbol[".$i."]: ".$stringA[$i].PHP_EOL;
}
