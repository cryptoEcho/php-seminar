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

$dbh = DBconnection();
$query = 'SELECT *
FROM `users`
';

$sth = $dbh->prepare($query);
$sth->execute();



$dbh = null;
// echo $sth->rowCount();
$answer = new stdClass();
$answer->allusers = $sth->rowCount();
header('Content-Type: application/json; charset=utf-8');
echo json_encode($answer, JSON_PRETTY_PRINT);


}
catch(Exception $e) {
    logger($e);
}