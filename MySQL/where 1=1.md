1 = 1其中condition始终为true，因为always 1等于1，因此该语句将始终为true。虽然它有时没有任何意义。 但其他时候开发人员在动态生成where条件时使用它。

例如，让我们看看这段代码
```
<?php
$cond = $_REQUEST['cond'];
if ($cond == "age"){
 $wherecond = " age > 18";
}         
$query = "select * from some_table where $wherecond";
?>
```
所以在上面的例子中，如果$ _REQUEST ['cond']不是“age”，则查询将返回mysql错误，因为在where条件之后没有任何内容。

查询将从some_table中选择*，其中是错误

解决这个问题（至少在这个不安全的例子中）我们使用

<?php
//not that this is just example
//do not use it like that in real environment because it security issue.
$cond = $_REQUEST['cond'];
if ($cond == "age"){
 $wherecond = " age > 18";
} else {
 $wherecond = " 1=1";
}        
$query = "select * from some_table where $wherecond";
?>
所以现在如果$ _REQUEST ['cond']不是年龄，则$ wherecond将为1 = 1，因此查询将不会返回mysql错误。

查询将从some_table中选择*，其中1 = 1并避免mysql错误

希望你理解当我们使用1 = 1的同时注意上面的例子不是现实世界的例子，它只是为了向你展示这个想法。