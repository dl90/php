<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>✌️</title>
</head>

<body>
  <?php
  function camelCase($string)
  {
    $words = explode(" ", $string);
    $string = array_shift($words);
    foreach ($words as $word) {
      $string .= ucfirst($word);
    }
    return  $string;
  }

  if (isset($_GET['query'])) {
    echo '<h2>' . camelCase($_GET['query']) . '</h2>';
  }
  ?>
  <form action="index.php" method="get">
    <label for="query">Search:</label>
    <input type="text" name="query" id="query">
    <button>Submit</button>
  </form>
</body>

</html>