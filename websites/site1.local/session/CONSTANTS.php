<?php

define('LOGIN_LINK', '<a href="login.php">Login</a>');
define('PRIVATE_LINK', '<a href="private.php">Private</a>');
define('SECRET_LINK', '<a href="secret.php">Secret</a>');
define('LOGOUT_LINK', '<a href="logout.php">Logout</a>');
define('TIME_OUT', 10);

function links(): void {
    echo '<hr>';
    echo '<nav>';
    echo LOGIN_LINK.' | ';
    echo PRIVATE_LINK.' | ' ;
    echo SECRET_LINK.' | ';
    echo LOGOUT_LINK;
    echo '</nav>';
}

function inactivity(int $time): void {
    if ($time - $_SESSION['last_activity'] > TIME_OUT) {
        header('Location: logout.php');
        die();
    }
}

function loginStats(int $time): void {
    echo 'Logged in as: '.$_SESSION['username'].'<br>';

    $startTime = new DateTime();
    $startTime->setTimestamp($_SESSION['login_time']);

    $endTime = new DateTime();
    $endTime->setTimestamp($time);

    $sinceStart = $startTime->diff($endTime);

    echo 'For: ';
    echo $sinceStart->h.'h ';
    echo $sinceStart->i.'m ';
    echo $sinceStart->s.'s <br>';
}

function echoFile(string $fileName): void {
    define('FILE_PATH', dirname(__FILE__)."/$fileName");
    if (!file_exists(FILE_PATH)) die('File missing');
    $contents = file_get_contents(FILE_PATH);
    echo "<p>$contents</p>";
}