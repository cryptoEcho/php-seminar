<?php

$dsn = 'mysql:host=localhost;dbname=banksdb;charset=utf8';
$username = 'defusr';
$password = 'password';

$pdo_db = new PDO($dsn, $username, $password);

$query = 'SELECT * FROM bank LIMIT 2;';

//$query_select = "
//SELECT cats.id
//FROM cats
//ORDER BY cats.id DESC
//LIMIT 1;
//";
$request = $pdo_db->prepare($query);
$request->execute();
$result = $request->fetchAll();
$json = json_encode($result);
print $json;
$pdo_db = null;
//$ids = '1,2';
//$category = 'Lennon';
//$stm = $pdo_db->prepare("SELECT * FROM pets.cats WHERE pets.cats.id IN (?) AND owner=?");
//$stm->execute([$ids, $category]);
//$result = $stm->fetchAll(PDO::FETCH_ASSOC);
//$json = json_encode($result, JSON_PRETTY_PRINT);
//print $json;
