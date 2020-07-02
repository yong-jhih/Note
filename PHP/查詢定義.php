<?php
    $my_val = 1;
    function my_func() { /* do something... */ }
    define('MY_CONSTANTS', 1);
    
    /**
     * 列出目前所有已定義的 function
     * 使用: get_defined_functions()
     */
    echo "<pre>目前所有已定義的 function : " . print_r(get_defined_functions(), TRUE). "</pre>";
    
    /**
     * 只列出自己定義的 function
     * 使用: get_defined_functions()['user']
     */
    echo "<pre>自己定義的 function : " . print_r(get_defined_functions()['user'], TRUE). "</pre>";
    
    /**
     * 列出目前所有已定義的常數
     * 使用: get_defined_constants(TRUE)
     */
    echo "<pre>目前所有已定義的常數 : " . print_r(get_defined_constants(TRUE), TRUE). "</pre>";
    
    /**
     * 只列出自己定義的常數
     * 使用: get_defined_constants(TRUE)['user']
     */
    echo "<pre>User's get_defined_constants() = " . print_r(get_defined_constants(TRUE)['user'], TRUE). "</pre>";
    
    /**
     * 列出目前已定義的變數
     * 使用: get_defined_vars()
     */
    echo "<pre>get_defined_vars() = " . print_r(get_defined_vars(), TRUE). "</pre>";