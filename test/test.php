<?php
$a = array ('array' => 6126,'isset' => 1345,'substr' => 845,'sprintf' => 737,'strlen' => 650,'count' => 598,'unset' => 556,'array_merge' => 449,'list' => 413,'strpos' => 408,'str_replace' => 393,'implode' => 348,'explode' => 333,'is_array' => 332,'static' => 297,'trim' => 263,'declare' => 238,'mock' => 237,'pack' => 232,'preg_match' => 222,'is_null' => 210,'get_class' => 203,'array_map' => 195,'self' => 191,'strtolower' => 190,'empty' => 183,'preg_replace' => 180,'chr' => 169,'function_exists' => 163,'user_error' => 161,'handle' => 158,'is_string' => 155,'is_object' => 140,'str_repeat' => 139,'array_keys' => 138,'rewind' => 137,'in_array' => 133,'write' => 132,'mt_rand' => 132,'array_values' => 129,'time' => 125,'not' => 124,'array_shift' => 124,'extract' => 120,'getenv' => 115,'reset' => 113,'execute' => 112,'printf' => 110,'fopen' => 108,'get' => 105,'collect' => 100,'current' => 100,'fclose' => 99,'unpack' => 96,'strval' => 96,'matches' => 92,'rtrim' => 90,'str_pad' => 88,'json_encode' => 88,'array_filter' => 88,'array_pop' => 85,'app' => 84,'range' => 84,'dirname' => 83,'define' => 81,'microtime' => 80,'foo' => 80,'create' => 80,'ord' => 80,'compact' => 79,'read' => 77,'method_exists' => 76,'register' => 75,'realpath' => 74,'intval' => 73,'bar' => 73,'strtotime' => 73,'fread' => 72,'class_exists' => 72,'print' => 72,'max' => 72,'curl_setopt' => 70,'fwrite' => 69,'tap' => 66,'strtoupper' => 65,'array_unshift' => 65,'serialize' => 64,'ob_start' => 64,'unserialize' => 63,'strrpos' => 61,'key' => 61,'preg_split' => 61,'ini_get' => 61,'add' => 59,'close' => 59,'array_slice' => 58,'putenv' => 57,'eval' => 57,'gettype' => 56,'var_export' => 56,
);
$b = "";
foreach($a as $key => $val){
   $b .= $key.",";
}
$b = substr($b,0,-1);
$b = explode(",",$b);
// echo "<pre>",print_r($b);

$c=array(1,1,1,2,2,2,3,3,3,3,4,4,4,4,4);
// $c = array_unique($c);
// echo "<pre>",print_r(array_count_values($c));

$array1 = array("color" => "black", 2, 4);
$array2 = array("a", "b", "color" => "yellow", "name" => "han", 4);
$result = array_merge($array1, $array2);
// echo "<pre>",print_r($result);
// echo "<hr>";
// echo "<pre>",print_r(array_values($result));