<?php
require_once(dirname(__FILE__).'/CONSTANTS.php');

session_start();
$time = $_SERVER['REQUEST_TIME'];
$timed_out = false;

if (isset($_SESSION['last_activity']) && $time - $_SESSION['last_activity'] > TIME_OUT)
    $timed_out = true;

$_SESSION = array();
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

session_destroy();

if ($timed_out) echo '<p>Session ended due to inactivity</p>';
echo LOGIN_LINK;
