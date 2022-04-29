<?php

$dsn = 'mysql:dbname=task-52;host=localhost;charset=utf8';
$dbh = new PDO($dsn, 'defusr', 'password');

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = 'SELECT * FROM `users` LIMIT 2;';
$sth = $dbh->prepare($sql);
$sth->execute();
$result = $sth->fetchAll();
foreach($result as $row) {
    print_r($row);
}
# var_export($result);
$dbh = null;
