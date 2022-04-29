<?php

$strictMode = false;
if( array_key_exists('strict_mode', $_GET) && !empty( $_GET['strict_mode'] ) ) {
    $strictMode = $_GET['strict_mode'];
}
ini_set('session.save_path', 'C:/tmp/1');
ini_set('session.use_strict_mode', $strictMode);
echo "Strict mode setting: [".ini_get('session.use_strict_mode')."]".PHP_EOL;
echo "Cookies: ".var_export($_COOKIE).PHP_EOL;
session_start();
echo "cur session id: ".session_id().PHP_EOL;
if( !isset($_SESSION['count']) ) {
    echo "new session created!".PHP_EOL;
    $_SESSION['count'] = 0;
}
else {
    echo "existing session found!".PHP_EOL;
    $_SESSION['count']++;
}