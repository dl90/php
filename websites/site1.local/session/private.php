<?php
require_once(dirname(__FILE__).'/CONSTANTS.php');

session_start();
$time = $_SERVER['REQUEST_TIME'];

if (isset($_SESSION['username']) && isset($_SESSION['last_activity']) && isset($_SESSION['login_time'])) {
    inactivity($time);
    loginStats($time);
    echoFile('private.txt');

    $_SESSION['last_activity'] = time();
    links();
} else {
    echo "<p>Please ", LOGIN_LINK ," first</p>";
}
