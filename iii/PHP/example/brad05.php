<?php
$var1 = 100; $var2 = 31;
$var3 = (int)($var1 / $var2);
echo $var1 . ' / ' . $var2 . ' = ' . $var3 . '<br>'; // 100 / 31 = 3
echo "$var1 / $var2 = $var3<br>"; // 100 / 31 = 3
echo '$var1 / $var2 = $var3<br>'; // $var1 / $var2 = $var3
$weight = 80;
echo "My weight = {$weight}kg"; // My weight = 80kg

?>