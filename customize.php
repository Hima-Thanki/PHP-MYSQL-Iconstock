<?php

$image_name = $_GET['img'];
$image = imagecreatefrompng(dirname(__FILE__) . '/images/'.$image_name);
imageflip($image, IMG_FLIP_VERTICAL);
header('Content-type: image/png');
imagejpeg($image);


?>