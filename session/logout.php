<?php
try {
    // add crucial functions from func.php
    require_once('func.php');

    // set settings for session
    set_session_params();

    // check request method
    check_request_method("POST");

    // session initialization

    session_start();
    // var_dump($_SESSION);
    session_destroy();
    $_SESSION = [];
    // var_dump($_SESSION);


    // from JSON to $_POST
    developJSON();


}
catch(Exception $e) {
    logger($e);
}





// echo '<pre>';
// echo '</pre>';
