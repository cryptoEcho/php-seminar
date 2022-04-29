<?php

$mysqli = new mysqli('localhost', 'defusr', 'password', 'banksdb');

$query = "SELECT `bank_id`, `title`, `owner_id` FROM `bank` WHERE `owner_id` = '".$_GET['owner_id']."'";

echo "Query to be executed: ".$query."<hr>";
$startTime = microtime(true);

$res = $mysqli->query($query);

$endTime = microtime(true);

// Calculate query execution time
$executionTime = ($endTime - $startTime );

echo " Execution time of script = ".$executionTime." sec<br>";

if( $res === false ) {
    die('No students found<br>');
}
if( $res->num_rows ) {
    $data = $res->fetch_all(MYSQLI_ASSOC);
    echo "students data: <br><pre>";  print_r($data); echo "";
}
else {
    echo "No students found<br>";
}