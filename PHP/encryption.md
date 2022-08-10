# encryption

## PHP 自帶加密函數(不可逆)
1. md5(string $str[,bool $raw_output=FALSE] ) :string<br>
**用來計算 md5 hash**
   1. $str : 加密的字符串
   2. $raw_output : true則返回16字元的原始二進制格式,預設false則以32字元十六進制數字返回散列值
```
$str = 'hello world';
echo md5($str,true)."\r\n";
echo md5($str,false)."\n";
```
2. sha1(string $str[,bool $raw_output= false] ) :string<br>
**計算字符串 sha1 散列值**
   1. $str : 加密的字符串
   2. $raw_output : true則返回20字元的原始二進制格式,預設false則以40字元十六進制數字返回散列值
```
$str = 'hello world';
echo sha1($str,true)."\r\n";
echo sha1($str,false)."\n";
```
3. crypt(string $str[,string $salt] ) :string<br>
**將字符串用 UNIX 的標準加密 DES 模組加密, 欲比對字符串須將以加密的頭2個字符放在salt的參數中, 再比對加密後的字符串**
   1. $str : 加密的字符串
   2. $salt : 鹽值字符串
```
$str = 'hello world';
echo crypt($str,'test')."\r\n";
```

## PHP 自帶加密函數(可逆)
1. base64_encode ( string $data ) : string<br>
**使用MIME base64 對數據進行編碼**
   1. $data : 字符串
```
$en_str = base64_encode('This is an encoded string');
echo $en_str."\n";
$de_str = base64_decode($en_str);
echo $de_str."\n";
```
2. urlencode ( string $str ) : string / rawurlencode ( string $str ) : string<br>
**編碼URL字符串**
   1. $str : 網址
```
$en_str = urlencode('https://www.baidu.com');
echo $en_str."\n";
$de_str = urldecode($en_str);
echo $de_str."\n";
```