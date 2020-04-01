<?php
$ary1 = array(1,2,3,4,5);
$ary2[7] = 123;
$ary2[6] = 456;
$ary2["hi"] = 789;
$var3=123;
var_dump($ary2); // array(1) { [7]=> int(123) }
echo '<br>';

echo count($ary2) . '<hr>'; // 1

foreach($ary2 as $k => $v){
    echo "{$k} : {$v}<br>"; // 7:123    6 : 456
}

?>
