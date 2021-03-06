<!-- 
The file_get_contents() reads a file into a "string".
    This function is the preferred way to read the contents of a file into a string.
    It will use memory mapping techniques, if this is supported by the server, to enhance performance.  --w3schools

Syntax
    file_get_contents(path, include_path, context, start, max_length)
    path:Required. Specifies the path to the file to read
    include_path:Optional. Set this parameter to '1' if you want to search for the file in the include_path (in php.ini) as well
    context:Optional. Specifies the context of the file handle. Context is a set of options that can modify the behavior of a stream. Can be skipped by using NULL.
    start:Optional. Specifies where in the file to start reading. Negative values count from the end of the file
    max_length:Optional. Specifies the maximum length of data read. Default is read to EOF


The file() reads a file into an "array".
    Each array element contains a line from the file, with the newline character still attached.    --w3schools

Syntax
    file(filename, flag, context)
    filename:Required. Specifies the path to the file to read
    flag:Optional. Can be one or more of the following constants:
        FILE_USE_INCLUDE_PATH - Search for the file in the include_path (in php.ini)
        FILE_IGNORE_NEW_LINES - Skip the newline at the end of each array element
        FILE_SKIP_EMPTY_LINES - Skip empty lines in the file
    context:Optional. Specifies the context of the file handle. Context is a set of options that can modify the behavior of a stream. Can be skipped by using NULL. -->

<?php
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