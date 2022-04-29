<?php

enum Typest {
    case integer;
    case string;
}

$a = Typest::cases()[0];
include('solution_types_count.php');
print_r(typesCounter(1,3.2, null));
print('');
