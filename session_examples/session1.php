<?php




ini_set('session.save_path', $_SERVER['DOCUMENT_ROOT'].'/session_examples');
session_name('my_cool_app');
session_set_cookie_params(
    [
        'httponly' => true,
//        'secure' => true,
        'sameSite' => 'strict'
    ]
);




// session begin
session_start();
echo "initial session with id[".session_id()."]: ";
var_dump($_SESSION);

if( !isset($_SESSION['count']) ) {
    $_SESSION['count'] = 0;
}
else {
    $_SESSION['count']++;
}
//if( $_SESSION['count']%5 == 0 ) {
//    session_regenerate_id(true);
////    session_regenerate_id(false);
//}
var_dump($_SESSION);
echo 'SAVE PATH: '.ini_get('session.save_path');