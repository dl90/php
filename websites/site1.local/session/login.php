<?php
require_once(dirname(__FILE__).'/CONSTANTS.php');
require_once(dirname(__FILE__) . '/authFunc.php');

$AUTH_ERROR = false;
$ACCOUNT_LOCKED = false;
$SERVER_ERROR = false;
$time = $_SERVER['REQUEST_TIME'];
session_start();

if (isset($_SESSION['username']) && isset($_SESSION['last_activity']) && isset($_SESSION['login_time'])) {
    inactivity($time);
    loginStats($time);
    links();
    die();
}
else if (isset($_GET['username']) && isset($_GET['password'])) {
    $authN = checkHash($_GET['username'], $_GET['password']);

    switch ($authN) {
        case 0:
            $AUTH_ERROR = true;
            break;
        case 1:
            $_SESSION['username'] = $_GET['username'];
            $_SESSION['login_time'] = time();
            $_SESSION['last_activity'] = time();
            loginStats($time);
            links();
            die();
        case 2:
            $ACCOUNT_LOCKED = true;
            break;
        default:
            $SERVER_ERROR = true;
    }
}
?>

<?php if ($AUTH_ERROR) echo '<p>Incorrect login credentials</p>'?>
<?php if ($ACCOUNT_LOCKED) echo '<p>Your account is locked</p>'?>
<?php if ($SERVER_ERROR) echo '<p>Oops, something went wrong</p>'?>
<form action="login.php" method="get">
    <label for="username">Username:</label>
    <input type="string" name="username" id="username"/>
    <label for="password">Password:</label>
    <input type="string" name="password" id="password"/>
    <input type="submit" value="Submit"/>
</form>
