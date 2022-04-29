<?php

session_start();
echo session_id();
var_dump($_SESSION);

if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
}
else {
    $_SESSION['count'] ++;
}

var_dump($_SESSION);