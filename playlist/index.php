<?php
require_once 'database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Playlist</title>
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

<body>
  <main>
    <!-- <div class="row d-flex justify-content-center"> -->
    <div class="container-fluid col-5 content">
      <h1>My Playlist</h1>

      <div class=" song-list">
        <ul class="list-group">
          <?php
          if ((isset($_POST["title"]) && strlen(trim($_POST["title"])) > 0) &&
              isset($_POST["number_of_stars"]) &&
              (strlen(trim($_POST["number_of_stars"]) &&
                ((intval(trim($_POST["number_of_stars"])) >= 0) &&
                  (intval(trim($_POST["number_of_stars"])) <= 5))
            ))
          ) {
            $postTitle = $_POST["title"];
            $postStars = $_POST["number_of_stars"];

            $cleanPostTitle = htmlspecialchars($postTitle);
            $cleanPostStars = htmlspecialchars($postStars);

            require_once "database.php";
            $data = getSongs();
            foreach ($data as $song) {
              if ($song["title"] == $cleanPostTitle) {
                $exists = True;
              }
            }

            if (!$exists) {
              postSong($cleanPostTitle, $cleanPostStars);
            }
          };

          $songs = getSongs();
          foreach ($songs as $song) {
            $star = intval($song['number_of_stars']);
            // echo gettype(intval($star));
            $totalStar = str_repeat("⭐️", $star);

            // echo '<li>' . $song['title'] . ' ' . $song['number_of_stars'] . '</li>';

            echo '<li class="list-group-item d-flex justify-content-between align-items-center col-auto overflow">' . $song['title'];
            echo '<span class="align-items-center justify-content-end col-auto">' . $totalStar . '</span>';
            echo '</li>';
          }
          ?>
        </ul>
      </div>

      <form action="index.php" method="POST">
        <div class="form-group form-row">
          <label for="song_title"                             class="col-form-label col-12">Title:</label>
          <input type="text" id="song_title" name="title"     class="form-control">
        </div>
        <div class="form-group form-row">
          <label for="number_of_stars"                                     class="col-form-label col-12">Stars:</label>
          <input type="number" id="number_of_stars" name="number_of_stars" class="form-control">
        </div>
        <button class="btn-primary text-light submit-button">Submit</button>
      </form>

    </div>
  </main>
</body>

</html>