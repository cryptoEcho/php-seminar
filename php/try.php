<?php

$mysqli = new mysqli('localhost', 'defusr', 'password', 'stud');

$query = "SELECT `lastname`, `firstname` FROM `students` WHERE `lastname` = '".$_GET['speciality_name']."'";

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