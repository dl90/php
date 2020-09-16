<!-- @author Don -->
<!-- January 20, 2020 -->
<!-- https://github.com/dl90 -->

<?php
require_once 'html.php';
require_once 'form.php';
require_once 'image_results.php';
require_once 'network_request.php';

$url = 'https://images-api.nasa.gov/search?q=';

if (isset($_GET['query']) and strlen(trim($_GET['query'])) > 0) {
  $res = network($_GET);

  foreach ($res->collection->items as $post) {
    if (strlen($post->data[0]->description) <= 3000) {
      echo img($post);
      echo '<h3 class="title" > ' . $post->data[0]->title .  '</h3>';
      echo '<p class="description" >' . $post->data[0]->description . '<\p>';
    }
  }
} else {
  echo '<p>Enter a query</p>';
}

echo '</main>';
echo '</body>';
echo '</html>';
?>