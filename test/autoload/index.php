<?php
//index.php
// echo __DIR__ . "/autoload.php";
// include_once __DIR__ . "/autoload.php";

// $member = new Member();
// $member->getMemberList();

?>

<?php
//index.php
// $first = new First();
// $first->doSomething();

// $second = new Second();
// $second->doSomething();

?>

<?php
//index.php
include_once __DIR__ . "/firstAutoload.php";
include_once __DIR__ . "/secondAutoload.php";

$first = new First();
$first->doSomething();

$second = new Second();
$second->doSomething();
?>