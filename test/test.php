<?php

$a="F";
$b="c";

// echo $a.$b;
echo $a;
echo $b;



function safe($data){
   if(is_string($data)){
      $ra = array('/([\x00-\x08,\x0b-\x0c,\x0e-\x19])/', '/script/', '/javascript/', '/vbscript/', '/expression/', '/applet/', '/meta/', '/xml/', '/blink/', '/link/', '/style/', '/embed/', '/object/', '/frame/', '/layer/', '/title/', '/bgsound/', '/base/', '/onload/', '/onunload/', '/onchange/', '/onsubmit/', '/onreset/', '/onselect/', '/onblur/', '/onfocus/', '/onabort/', '/onkeydown/', '/onkeypress/', '/onkeyup/', '/onclick/', '/ondblclick/', '/onmousedown/', '/onmousemove/', '/onmouseout/', '/onmouseover/', '/onmouseup/', '/onunload/');
      $data  = addslashes($data);
      $data  = preg_replace($ra, '', $data);
      $data  = htmlentities(strip_tags($data));
      return $data;
   }
}
$a=safe(file_get_contents('https://www.php.net/manual/en/function.file-get-contents.php'));

// echo "<pre>",var_export($a),"</pre>";
// echo "<pre>",var_dump($a),"</pre>";
echo "<pre>",print_r($a,true),"</pre>";

?>