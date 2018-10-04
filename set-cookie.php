<?php

require('config.php');

if ( isset($_POST['user-submit']) ){
    $userName = $_POST['user-name'];
    $userCity = $_POST['user-сity'];
    $expire = time() + 60*60*24*30;
    
    setcookie('user-name', $userName, $expire);
    setcookie('user-сity', $userCity, $expire);
}

header('Location: ' . HOST . 'request.php');

?>