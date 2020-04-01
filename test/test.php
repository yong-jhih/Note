<?php

// $a="F";
// $b="c";

// // echo $a.$b;
// echo $a;
// echo $b;

// function safe($data){
//    if(is_string($data)){
//       $ra = array('/([\x00-\x08,\x0b-\x0c,\x0e-\x19])/', '/script/', '/javascript/', '/vbscript/', '/expression/', '/applet/', '/meta/', '/xml/', '/blink/', '/link/', '/style/', '/embed/', '/object/', '/frame/', '/layer/', '/title/', '/bgsound/', '/base/', '/onload/', '/onunload/', '/onchange/', '/onsubmit/', '/onreset/', '/onselect/', '/onblur/', '/onfocus/', '/onabort/', '/onkeydown/', '/onkeypress/', '/onkeyup/', '/onclick/', '/ondblclick/', '/onmousedown/', '/onmousemove/', '/onmouseout/', '/onmouseover/', '/onmouseup/', '/onunload/');
//       $data  = addslashes($data);
//       $data  = preg_replace($ra, '', $data);
//       $data  = htmlentities(strip_tags($data));
//       return $data;
//    }
// }
// $a=safe(file_get_contents('https://www.php.net/manual/en/function.file-get-contents.php'));

// // echo "<pre>",var_export($a),"</pre>";
// // echo "<pre>",var_dump($a),"</pre>";
// echo "<pre>",print_r($a,true),"</pre>";

// echo phpinfo();
// 创建一个新cURL资源
$ch = curl_init();
$options = array(
   CURLOPT_URL => "https://dz99.com/ft/", //網址
   //CURLOPT_POST => true, //開啟POST
   //CURLOPT_POSTFIELDS => http_build_query($params), //POST參數
   //CURLOPT_FOLLOWLOCATION => true,  //是否要抓取轉址
   CURLOPT_RETURNTRANSFER => false,  //只傳回結果，不輸出在畫面上
   //CURLOPT_HEADER => true, //顯示HEADER資訊
   //CURLOPT_USERAGENT => "Google Bot", //設定AGENT
   //CURLOPT_FILE => fopen("file","w"), //設定檔案(將結果輸入到檔案之中)
   //CURLOPT_NOBODY => true, //不要顯示目的端資料
);
curl_setopt_array($ch,$options);
// 设置URL和相应的选项
// curl_setopt($ch, CURLOPT_URL, "https://dz99.com/ft/");
// curl_setopt($ch, CURLOPT_HEADER, 0);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0);
// 抓取URL并把它传递给浏览器
// $curl->init($params);
// echo "<script>console.log(".$date.")</script>";
$result_tmp = curl_exec($ch);
// explode("<div",$str);
// print_r($str);
// echo $ch ;
$lines = explode("</tr>",$result_tmp);
$ResultData=array();
for($i=1;$i<count($lines)-1;$i++){
    unset($lines3);
    $lines3 = explode("<td>",$lines[$i],2);
    $lines4 = explode("&nbsp;",$lines3[1],2);
    $ResultData[$i]['preDrawIssue']=str_replace("-","",$lines4[0]);
    $lines5 = explode("</td>",$lines4[1],2);
    $lines6 = explode("<i class=\"no",$lines5[1]);
    for($j=0;$j<3;$j++){
        $lines7 = explode("\">",$lines6[$j+1]);
        $lines8 = explode("</i>",$lines7[1]);
        $ResultData[$i]['preDrawCode'][$j]=$lines8[0];
    }
}

// 关闭cURL资源，并且释放系统资源
curl_close($ch);

?>