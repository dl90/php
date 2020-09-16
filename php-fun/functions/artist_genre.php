<?php

/*
array (
  'Pop' =>
  array (
    0 => 'Post Malone',
    1 => 'Camila Cabello',
  ),
  'Alternative' =>
  array (
    0 => 'Tones and I',
    1 => 'Billie Eilish',
  ),
)
*/
function organizeArtists($artists)
{
  $arr = $artists;
  $genreArr = [];
  $artistArr = array();

  foreach ($arr as $element) {
    # echo $element["genre"] . "<br>";
    if (!in_array($element["genre"], $genreArr, TRUE)) {
      array_push($genreArr, $element["genre"]);
    }
  }

  foreach ($genreArr as $ele) {
    $temp = [];
    foreach ($arr as $artist) {
      if ($artist["genre"] === $ele) {
        # echo $artist["name"] . "<br>";
        array_push($temp, $artist["name"]);
      }
    }
    # var_dump($temp);
    $artistArr += array($ele => $temp);
  }
  # var_dump($artistArr);
  return $artistArr;
}

$artists = [
  ["name" => "Post Malone", "song" => "Circles", "genre" => "Pop"],
  ["name" => "Camila Cabello", "song" => "Liar", "genre" => "Pop"],
  ["name" => "Tones and I", "song" => "Dance Monkey", "genre" => "Alternative"],
  ["name" => "Billie Eilish", "song" => "Bad Guy", "genre" => "Alternative"],
];

$organizedArtists = organizeArtists($artists);

echo '<pre>' . var_export($organizedArtists, true) . '</pre>';
