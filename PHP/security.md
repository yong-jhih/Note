# PHP7 入門研習
![img](https://cdn.pingwest.com/wp-content/uploads/2015/07/hacker-big.jpg)

### 過濾變數
零、體會一下被駭的感覺...
請在帳號輸入框分別輸入底下內容試試（XSS攻擊）：
```
<script>alert('XSS')</script>
```

一、外來變數
用post方法傳過來的，我們用 $_POST['變數名稱'] 接收。
用get方法傳過來的，我們用 $_GET['變數名稱'] 接收。
用 $_REQUEST['變數名稱'] 同時可接收來自 post、get 和 cookie 的變數 。
二、過濾外來變數
外來變數通常來自使用者輸入或者比較容易竄改，所以，一定要進行過濾。
https://www.thenewslens.com/article/74761
用內建的 htmlspecialchars() 函數來過濾。
直接用 htmlspecialchars($string) 的話，預設只轉化雙引號，不對單引號做轉義，所以，這樣用htmlspecialchars($string,ENT_QUOTES) 更好。
另一個和 htmlspecialchars 很像的 htmlentities 函數並不適用中文，因為會連同中文字一起轉義。
用 htmlentities 和 htmlspecialchars 只能防止XSS攻擊，不能防止SQL隱碼攻擊。

$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
改用PHP的 filter_var 過濾器亦有同樣效果：
$name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
三、 PHP的 filter_var 過濾器
可利用PHP內建的 filter_var() 函數來過濾變數。
幾種常用過濾方法，完整過濾器可由此查看：
名稱	功用
FILTER_CALLBACK	option可以讓開發者用自訂的function處理
FILTER_SANITIZE_STRING	去除標籤或特殊字元(html標籤會直接被消除)
FILTER_SANITIZE_ENCODED	與urlencode()相同，過濾特殊字串
FILTER_SANITIZE_MAGIC_QUOTES	過濾針對SQL injection做過濾(例如單、雙引號)
FILTER_SANITIZE_SPECIAL_CHARS	針對HTML做encoding，例如<會轉成&lt;
FILTER_SANITIZE_EMAIL	過濾e-mail，刪除e-mail格式不該出現的字元(除了$-_.+!*'{}|^~[]`#%/?@&=和數字)，例如a(b)@gmail.com會被過濾成ab@gmail.com
FILTER_SANITIZE_URL	過濾URL，刪除URL格式不該出現的字元
FILTER_SANITIZE_NUMBER_INT	刪除所有字元，只留下數字與+-符號
FILTER_SANITIZE_NUMBER_FLOAT	刪除所有字元，只留下數字和+-.,eE
FILTER_VALIDATE_INT	判斷數字是否有在範圍內
FILTER_VALIDATE_BOOLEAN	判斷布林值，1、true、on、yes都會判斷成true，反之為false，若是這些以外的值會回傳NULL
FILTER_VALIDATE_FLOAT	判斷是否為浮點數
FILTER_VALIDATE_REGEXP	利用regexp做驗證
FILTER_VALIDATE_URL	URL驗證
FILTER_VALIDATE_EMAIL	e-mail驗證
FILTER_VALIDATE_IP	IP驗證
四、過濾數字
一般過濾數字用 intval() 即可，會強制把輸入的內容變成數字。
亦可用 filter_var($num, FILTER_SANITIZE_NUMBER_INT) 來過濾，但和 intval 不太一樣，例如：
$num = "123吳弘凱456";
echo filter_var($num, FILTER_SANITIZE_NUMBER_INT) . "<br>";
echo intval($num) . "<br>";
用intval()會得到 123，但用filter_var() 會得到 123456


```

function xss_clean($data){
// Fix &entity＼n;
$data=str_replace(array('&','<','>'),array('&amp;','&lt;','&gt;'),$data);
$data=preg_replace('/(&#*＼w )[＼x00-＼x20] ;/u','$1;',$data);
$data=preg_replace('/(&#x*[0-9A-F] );*/iu','$1;',$data);
$data=html_entity_decode($data,ENT_COMPAT,'UTF-8');
// Remove any attribute starting with "on" or xmlns
$data=preg_replace('#(<[^>] ?[＼x00-＼x20"＼'])(?:on|xmlns)[^>]* >#iu','$1>',$data);
// Remove javascript: and vbscript: protocols
$data=preg_replace('#([a-z]*)[＼x00-＼x20]*=[＼x00-＼x20]*([`＼'"]*)[＼x00-＼x20]*j[＼x00-＼x20]*a[＼x00-＼x20]*v[＼x00-＼x20]*a[＼x00-＼x20]*s[＼x00-＼x20]*c[＼x00-＼x20]*r[＼x00-＼x20]*i[＼x00-＼x20]*p[＼x00-＼x20]*t[＼x00-＼x20]*:#iu','$1=$2nojavascript...',$data);
$data=preg_replace('#([a-z]*)[＼x00-＼x20]*=([＼'"]*)[＼x00-＼x20]*v[＼x00-＼x20]*b[＼x00-＼x20]*s[＼x00-＼x20]*c[＼x00-＼x20]*r[＼x00-＼x20]*i[＼x00-＼x20]*p[＼x00-＼x20]*t[＼x00-＼x20]*:#iu','$1=$2novbscript...',$data);
$data=preg_replace('#([a-z]*)[＼x00-＼x20]*=([＼'"]*)[＼x00-＼x20]*-moz-binding[＼x00-＼x20]*:#u','$1=$2nomozbinding...',$data);
// Only works in IE: <span style="width: expression(alert('Ping!'));"></span>
$data=preg_replace('#(<[^>] ?)style[＼x00-＼x20]*=[＼x00-＼x20]*[`＼'"]*.*?expression[＼x00-＼x20]*＼([^>]* >#i','$1>',$data);
$data=preg_replace('#(<[^>] ?)style[＼x00-＼x20]*=[＼x00-＼x20]*[`＼'"]*.*?behaviour[＼x00-＼x20]*＼([^>]* >#i','$1>',$data);
$data=preg_replace('#(<[^>] ?)style[＼x00-＼x20]*=[＼x00-＼x20]*[`＼'"]*.*?s[＼x00-＼x20]*c[＼x00-＼x20]*r[＼x00-＼x20]*i[＼x00-＼x20]*p[＼x00-＼x20]*t[＼x00-＼x20]*:*[^>]* >#iu','$1>',$data);
// Remove namespaced elements (we do not need them)
$data=preg_replace('#</*＼w :＼w[^>]* >#i','',$data);
do{// Remove really unwanted tags
$old_data=$data;
$data=preg_replace('#</*(?:applet|b(?:ase|gsound|link)|embed|frame(?:set)?|i(?:frame|layer)|l(?:ayer|ink)|meta|object|s(?:cript|tyle)|title|xml)[^>]* >#i','',$data);
}while($old_data!==$data);
// we are done...
return $data;
}

```


```
<?php
//php防注入和XSS攻擊通用過濾. 
//by qq:831937
$_GET     && SafeFilter($_GET);
$_POST    && SafeFilter($_POST);
$_COOKIE  && SafeFilter($_COOKIE);
function SafeFilter(&$arr)
{
   $ra = array('/([\x00-\x08,\x0b-\x0c,\x0e-\x19])/', '/script/', '/javascript/', '/vbscript/', '/expression/', '/applet/', '/meta/', '/xml/', '/blink/', '/link/', '/style/', '/embed/', '/object/', '/frame/', '/layer/', '/title/', '/bgsound/', '/base/', '/onload/', '/onunload/', '/onchange/', '/onsubmit/', '/onreset/', '/onselect/', '/onblur/', '/onfocus/', '/onabort/', '/onkeydown/', '/onkeypress/', '/onkeyup/', '/onclick/', '/ondblclick/', '/onmousedown/', '/onmousemove/', '/onmouseout/', '/onmouseover/', '/onmouseup/', '/onunload/');
   if (is_array($arr)) {
      foreach ($arr as $key => $value) {
         if (!is_array($value)) {
            if (!get_magic_quotes_gpc())             //不對magic_quotes_gpc轉義過的字元使用addslashes(),避免雙重轉義。
            {
               $value  = addslashes($value);           //給單引號（'）、雙引號（"）、反斜線（\）與 NUL（NULL 字元）加上反斜線轉義
            }
            $value       = preg_replace($ra, '', $value);     //刪除非列印字元，粗暴式過濾xss可疑字串
            $arr[$key]     = htmlentities(strip_tags($value)); //去除 HTML 和 PHP 標記並轉換為 HTML 實體
         } else {
            SafeFilter($arr[$key]);
         }
      }
   }
}
?>
```