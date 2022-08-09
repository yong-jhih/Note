# Exception
```
<?php
function check($num)
{
    if ($num == 0) {
        throw new Exception('num can not be 0', 100);
    }
    return $num;
}

try {
    echo check(0);
} catch (Exception $e) {
    $return = [
        'Error Message' => $e->getMessage(),
        'Error Code' => $e->getCode(),
    ];
    echo json_encode($return);
    // echo 'Error Message:' . $e->getMessage() . "<br>";
    // echo 'Error Code:' . $e->getCode() . "<br>";
}
?>
```