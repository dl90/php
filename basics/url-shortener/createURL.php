<?php

// DEPRECATED

session_start();
if (!isset($_SESSION["id"])) {
  header("Location: index.php");
  exit();
}

// if (!isset($_COOKIE['user_id'])) {
//   header("Location: index.php");
//   exit();
// }
echo '
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Create Short URL</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <!-- Popper.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <!-- Bootstrap JavaScript -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
</head>
';

require_once 'database.php';
$userId = $_SESSION["id"];

// $userId = $_COOKIE['user_id'];
$user = getUser($userId);

echo "<h3>&nbsp;&nbsp;&nbsp; Welcome, you are currently logged in as " . $user['username'] . "</h3>";

if (isset($_POST['query']) and strlen(trim($_POST['query'])) > 0) {
  $longUrl =  $_POST["query"];
  $cleanLongUrl = htmlspecialchars($longUrl);
  $code =  uniqid();

  echo '<div class="alert alert-success alert-dismissible" role="alert" id="yesAlert">';
  echo "<h5>&nbsp;&nbsp;&nbsp;&nbsp; Your code to access url is: &nbsp" . $code . "</h5>";
  echo "<h5>&nbsp;&nbsp;&nbsp;&nbsp; $longUrl &nbsp&nbsp Sucessfully assigned to userId: &nbsp&nbsp $userId" . "</h5>";
  echo '
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
    ';

  $state = createURL($cleanLongUrl, $code, $userId);
} else if (isset($_POST['query'])) {
  echo '
  <div class="alert alert-danger alert-dismissible" role="alert" id="noAlert">
  Link is empty.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
  ';
};
?>

<body>
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-auto">
        <form class="form" action="createURL.php" method="post">
          <div class="form-group form-row">
            <label for="query" class="col-form-label col-4">Long URL:</label>
            <input type="text" name="query" id="query" class="form-control col-sm-8">
          </div>
          <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Submit</button>
        </form>
        <a href="logout.php" class="row">Logout</a>
        <a href="urls.php" class="row">Show Stored URL</a>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Confirm Submission</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Are you sure you want to submit this link?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
          </div>
        </div>
      </div>
    </div>

  </div>

  <script>
    $("#myModal .btn-primary").click(function() {
      $("#yesAlert").show();
    });
  </script>
</body>