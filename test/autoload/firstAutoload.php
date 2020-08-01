<?php
//firstAutoload.php
function firstAutoload($className) {    
    $filename = __DIR__ . "/first/" . $className . ".php";
    if (is_readable($filename)) {
        require $filename;
    }
}

spl_autoload_register('firstAutoload');