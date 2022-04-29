<?php
try {
// add crucial functions from func.php
require_once('func.php');

var_dump($_SERVER["REQUEST_METHOD"]);
// set settings for session
set_session_params();

// check request method
check_request_method("POST");

// session initialization
session_start();


// from JSON to $_POST
developJSON();

//check if user is not auth
if (!isset($_SESSION['is_auth'])) { 
    // if user is not authenticated check if he send to us credentials
    if (isset($_POST['login'], $_POST['password'])) {
        $credentials = CheckCredentials($_POST['login'], $_POST['password']);
        if ($credentials['is_correct']) {
            // user sent credentials and we find this user with his password
            session_regenerate_id(false);
            $_SESSION['is_auth'] = true;
            $_SESSION['user_id'] = $credentials['user_id'];// корректный логин
            // echo '<pre>';
            // var_dump($_SESSION);
            // echo '</pre>';
            header("HTTP/1.1 200 OKq");
        }
        else {
            header("HTTP/1.1 200 Invalid Credentials");
            new Exception('Unauthorized', 401);
            die();
        }
        
        
    }
    else {
        header("HTTP/1.1 200 Invalid Credentials");
        new Exception('Unauthorized', 401);
        die();
    }
}
else {
    header("HTTP/1.1 200 OKs");
}

}
catch(Exception $e) {
    var_dump($e);
    // var_dump($_SERVER);
    logger($e);
}





// echo '<pre>';
// echo '</pre>';
