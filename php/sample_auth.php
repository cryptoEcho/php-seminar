<?php

$mysqli = new mysqli('localhost', 'defusr', 'password', 'stud1');

$query = "SELECT * FROM users WHERE username='". $_GET['username'] ."' 
    AND password='". $_GET['password'] ."'";

echo "Query to be executed: ".$query."<br>";

$res = $mysqli->query($query);
if( $res === false ) {
    echo "Mysql error: ".$mysqli->error;
    die();
}

if( !$res->num_rows ) {
    echo "No users found";
}
else {
    echo "Found users: <br>";
    print_r( $res->fetch_all(MYSQLI_ASSOC) );
}