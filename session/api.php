<?php

try {
// add crucial functions from func.php
require_once('func.php');

// set settings for session
set_session_params();

// check request method
check_request_method("GET");

// session initialization
session_start();

if (!isset($_SESSION['is_auth'])) {
    header("HTTP/1.1 403 Forbidden");
    logger(new Exception('Forbidden', 403));
    die();
}
header("HTTP/1.1 200 OKey");
$dbh = DBconnection();
$query = 'SELECT `followers`
FROM `users`
WHERE `id`=:id
';

$sth = $dbh->prepare($query);
$sth->bindValue('id', $_SESSION['user_id']);
$sth->execute();



$dbh = null;
// echo $sth->rowCount();
$answer = $sth->fetch(PDO::FETCH_ASSOC);
header('Content-Type: application/json; charset=utf-8');
echo json_encode($answer, JSON_PRETTY_PRINT);


}
catch(Exception $e) {
    logger($e);
}