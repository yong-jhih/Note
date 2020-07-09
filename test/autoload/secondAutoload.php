<?php
//secondAutoload.php
function secondAutoload($className) {    
    $filename = __DIR__ . "/second/" . $className . ".php";
    if (is_readable($filename)) {
        require $filename;
    }
}

spl_autoload_register('secondAutoload');