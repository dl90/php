<?php

function artistWithLongestName($artists)
{
  $arr = $artists;
  $comparator = "";

  foreach ($arr as $element) {
    $num = strlen($element["name"]);
    if ($num > strlen($comparator)) {
      $comparator = $element["name"];
    }
  }

  return $comparator;
}

$artists = [
  ["name" => "Post Malone", "song" => "Circles", "genre" => "Pop"],
  ["name" => "Camila Cabello", "song" => "Liar", "genre" => "Pop"],
  ["name" => "Tones and I", "song" => "Dance Monkey", "genre" => "Alternative"],
  ["name" => "Billie Eilish", "song" => "Bad Guy", "genre" => "Alternative"],
];

echo "<p>" . artistWithLongestName($artists) . "</p>";
