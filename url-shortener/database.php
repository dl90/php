<?php
require_once 'sqlCredentials.php';

$pdo = new PDO(DSN, USERNAME, PASSWORD);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// True if user does not exists
function checkUser($user)
{
  global $pdo;
  $unique = False;
  try {
    $sql = "SELECT username FROM users WHERE username = ?";
    $statement = $pdo->prepare($sql);
    $params = [$user];
    $statement->execute($params);

    if (!count($statement->fetchAll())) {
      $unique = True;
    }
  } catch (PDOException $e) {
    echo $e;
  }
  return $unique;
}


function createUser($username, $password)
{
  global $pdo;
  try {
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $statement = $pdo->prepare($sql);
    $params = [$username, $password];
    $statement->execute($params);

    return true;
  } catch (PDOException $e) {
    echo $e;
  }
}


function login($cleanUsername)
{
  global $pdo;
  try {
    $sql = "SELECT username, password FROM users WHERE username = ?";
    $statement = $pdo->prepare($sql);
    $params = [$cleanUsername];
    $statement->execute($params);

    return $statement->fetch();
  } catch (PDOException $e) {
    echo $e;
  }
}


function createURL($longUrl, $code, $userId)
{
  global $pdo;
  try {
    $sql = "INSERT INTO urls (long_url, code, user_id) VALUES (?, ?, ?)";
    $statement = $pdo->prepare($sql);
    $params = [$longUrl, $code, $userId];
    $statement->execute($params);

    return true;
  } catch (PDOException $e) {
    echo $e;
    return false;
  }
}


function getUrlCode($code)
{
  global $pdo;
  try {
    $sql = "SELECT long_url FROM urls WHERE code = ?";
    $statement = $pdo->prepare($sql);
    $params = [$code];
    $statement->execute($params);

    return $statement;
  } catch (PDOException $e) {
    echo $e;
  }
}


function getUrls($userId)
{
  global $pdo;
  try {
    $sql = "SELECT id, long_url, code FROM urls WHERE user_id = ?";
    $statement = $pdo->prepare($sql);
    $params = [$userId];
    $statement->execute($params);
  } catch (PDOException $e) {
    echo $e;
  }

  return $statement->fetchAll();
}


function getID($cleanUsername)
{
  global $pdo;
  try {
    $sql = "SELECT id FROM users WHERE username = ?";
    $statement = $pdo->prepare($sql);
    $params = [$cleanUsername];
    $statement->execute($params);

    return $statement->fetch();
  } catch (PDOException $e) {
    echo $e;
  }
}


function getUser($userID)
{
  global $pdo;
  try {
    $sql = "SELECT username FROM users WHERE id = ?";
    $statement = $pdo->prepare($sql);
    $params = [$userID];
    $statement->execute($params);

    return $statement->fetch();
  } catch (PDOException $e) {
    echo $e;
  }
}
