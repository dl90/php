<?php

$incorrectMSG = "Incorrect login info.";

if ((isset($_POST['username']) and strlen(trim($_POST['username'])) > 0) && (isset($_POST['password']) and strlen(trim($_POST['password'])) > 0)) {
  $username =  $_POST["username"];
  $cleanUsername = htmlspecialchars($username);
  $password =  $_POST["password"];
  $cleanPassword = htmlspecialchars($password);

  require_once 'database.php';

  $user = login($cleanUsername);
  $id = getID($cleanUsername);

  if (!$user) {
    alert($incorrectMSG);
    redirect();
  } else if (!password_verify($cleanPassword, $user["password"])) {
    alert($incorrectMSG);
    redirect();
  } else {
    session_start();
    $_SESSION["id"] = $id["id"];

    // setcookie("user_id", $id["id"]);
    header("Location: urls.php");

    exit();
  }
} else {
  alert($incorrectMSG);
  redirect();
}

function alert($message)
{
  echo "<script type='text/javascript'>alert('$message');</script>";
}

function redirect()
{
  echo "<script>location.href='index.php';</script>";
}
