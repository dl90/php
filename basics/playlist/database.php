<?php

define('DSN', "mysql:host=127.0.0.1;dbname=music_library");
define('USERNAME', "root");
define('PASSWORD', "root");

$pdo = new PDO(DSN, USERNAME, PASSWORD);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function getSongs() {
  global $pdo;

  try {
    $sql = "SELECT id, title, number_of_stars FROM songs ORDER BY number_of_stars DESC";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    return $statement->fetchAll();

  } catch (PDOException $e) {
    echo $e;
  };

  // $sql = "
  // SELECT id, title, number_of_stars
  // FROM songs
  // ORDER BY number_of_stars DESC";

  // $statement = $pdo->prepare($sql);
  // $statement->execute();
  // return $statement->fetchAll();
}

function postSong($title, $numberOfStars) {
  global $pdo;

  try {
    $sql = "INSERT INTO songs (title, number_of_stars) VALUES (?, ?)";
    $params = [$title, $numberOfStars];
    $statement = $pdo->prepare($sql);
    $statement->execute($params);

  } catch (PDOException $e) {
    echo $e;
  };

  // $sql = "
  // INSERT INTO songs (title, number_of_stars)
  // VALUES ('$title', $numberOfStars)";

  // $pdo = new PDO(DSN, USERNAME, PASSWORD);
  // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // $statement = $pdo->prepare($sql);
  // $statement->execute();
}