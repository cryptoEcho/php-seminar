<?php

ini_set('session.save_path', 'C:/tmp/1');

// example - should regenerate session id after successful authentication
session_start();

echo "starting, sessionId = ".session_id().PHP_EOL;
echo "session_data: ".var_export($_SESSION, true).PHP_EOL;

if( isset($_SESSION['is_auth']) && $_SESSION['is_auth'] ) {
    echo "You are already authenticated! No need to do it again".PHP_EOL;
    return;
}

$user = $_POST['user'];
$password = $_POST['password'];

if( $user == 'user' && $password == 'password' ) {
//    session_regenerate_id(true);
    session_regenerate_id(false);
    echo "success! you are authenticated".PHP_EOL;
    $_SESSION['is_auth'] = true;
}
else {
    echo "wrong password!".PHP_EOL;
}

echo "end script, sessionId = ".session_id().PHP_EOL;
echo "session_data: ".var_export($_SESSION, true).PHP_EOL;