<?php

if (
  (isset($_POST['username']) && strlen(trim($_POST['username'])) > 0) &&
  (isset($_POST['password']) && strlen(trim($_POST['password'])) > 0) &&
  (isset($_POST['verify_password']) && strlen(trim($_POST['verify_password'])) > 0)
) {
  $username =  $_POST["username"];
  $cleanUsername = htmlspecialchars($username);

  $password =  $_POST["password"];
  $cleanPassword = htmlspecialchars($password);

  $verify_password = $_POST["verify_password"];
  $cleanVerifiedPassword = htmlspecialchars(($verify_password));

  require_once 'database.php';

  if ($cleanPassword === $verify_password) {
    // $hashedPW = hash("sha256", $cleanPassword);
    $hashedPW = password_hash($cleanPassword, PASSWORD_BCRYPT);

    if (checkUser($cleanUsername)) {
      $state = createUser($cleanUsername, $hashedPW);
      if ($state) {
        alert("User: $cleanUsername inserted");
        redirect();
      }
    } else {
      alert("Username already exists.");
      redirect();
    }
  } else {
    alert("Passwords do not match.");
    redirect();
  }
} else {
  alert("Incorrect Information");
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
