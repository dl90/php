<?php

$original = ImageCreateFromJpeg('src.jpg');

$width_th = 200;
$height_th = 200;

$width_og = Imagesx($original);
$height_og = Imagesy($original);

if ($width_og > $height_og) {
    $height_th = round( $height_th * ($height_og/$width_og));
} else if ($width_og < $height_og) {
    $width_th = round($width_th * ($width_og/$height_og));
}

echo "$width_og $height_og $width_th $height_th<br>";
$img = ImageCreateTrueColor($width_th, $height_th);
ImageCopyResampled($img, $original, 0, 0, 0, 0, $width_th, $height_th, $width_og, $height_og);

ImageJpeg($img, 'thumb.jpg');
ImageDestroy($original);
ImageDestroy($img);

echo '<img src="thumb.jpg">';