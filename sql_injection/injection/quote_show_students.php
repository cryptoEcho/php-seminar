<?php

$mysqli = new mysqli('localhost', 'root', '1111', 'stud3');
$mysqli->set_charset("utf8");
$age = $mysqli->real_escape_string($_GET['age']);
$query = "SELECT `id`, `lastname`, `firstname` FROM `students` WHERE `age` > '{$age}'";
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

