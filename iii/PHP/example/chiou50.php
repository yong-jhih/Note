<?php
$img = imagecreatefromjpeg("coffee.jpg");
$yellow = imagecolorallocate($img,0,0,255);
imagettftext($img,36,45,100,200,$yellow,"C:\\xampp\htdocs\chiou\MATURASC.tcc","hello,world");
header('content-type:image/jpeg');
imagejpeg($img);
imagedestroy($img);
?>