<?php

$dsn = 'mysql:host=localhost;dbname=pets;charset=utf8';
$username = 'defusr';
$password = 'password';

$pdo_db = new PDO($dsn, $username, $password);

var_dump($_GET);
