<?php
    class C
    {
        public function __construct($name)
        {
            $this->name = $name ;
        }
    }
    $a = array( 1 , 'abcdefg' , array( 5 , 9 , 'hijkl')); // 陣列
    $b = 'xyz' ;
    $c = new C('Mary') ;
    $d = "<br>" ;
    $e = "<hr>" ;

    // print_r — Prints human-readable information about a variable -- (PHP 4, PHP 5, PHP 7) PHP Manual 
    // print_r ( mixed $expression [, bool $return = FALSE ] ) bool $return (print on page or not --new features after PHP 4.3)
    // print_r($a);
    echo "<pre>",print_r($a,true),"</pre>";
    // print — Output a string -- (PHP 4, PHP 5, PHP 7) PHP Manual
    print($b);
    print($e);


    // between var_dump and var_export
    // var_dump — Dumps information about a variable -- (PHP 4, PHP 5, PHP 7) PHP Manual (it's better than print_r in debug)
    // var_dump($a);
    echo "<pre>",var_dump($a),"</pre>";
    // var_export — Outputs or returns a parsable string representation of a variable -- (PHP 4 >= 4.2.0, PHP 5, PHP 7)  PHP Manual
    // var_export($a);
    echo "<pre>",var_export($a),"</pre>";


    // between printf and sprintf
    // printf — "Output" a formatted string -- (PHP 4, PHP 5, PHP 7) PHP Manual
    // printf ( string $format [, mixed $args [, mixed $... ]] ) : int
    printf("%s %d hello world i'm here",$b , 15);
    echo $d ;
    // sprintf — "Return" a formatted string -- (PHP 4, PHP 5, PHP 7) PHP Manual
    // sprintf ( string $format [, mixed $... ] ) : string
    echo sprintf("%s %d hello world i'm here",$b , 15);