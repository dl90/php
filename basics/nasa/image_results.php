<?php

function img($post) {
  return '<img class="image" src= "' . $post->links[0]->href . '">';
}
?>