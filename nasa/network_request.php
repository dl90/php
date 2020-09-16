<?php

function network($GET) {
  $url = 'https://images-api.nasa.gov/search?q=';
  return json_decode(file_get_contents($url . trim($GET['query'])));
}
?>