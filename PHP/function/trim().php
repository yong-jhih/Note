<?php
$str = "   Hello World!   " ;
var_dump($str);
echo "<hr>";

$strall = trim($str);
var_dump($strall);
echo "<hr>";

$strl = ltrim($str);
var_dump($strl);
echo "<hr>";

$strr = rtrim($str);
var_dump($strr);