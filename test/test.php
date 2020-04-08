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
// $ch = curl_init();
// $options = array(
//    CURLOPT_URL => "https://dz99.com/ft/", //網址
//    //CURLOPT_POST => true, //開啟POST
//    //CURLOPT_POSTFIELDS => http_build_query($params), //POST參數
//    //CURLOPT_FOLLOWLOCATION => true,  //是否要抓取轉址
//    CURLOPT_RETURNTRANSFER => false,  //只傳回結果，不輸出在畫面上
//    //CURLOPT_HEADER => true, //顯示HEADER資訊
//    //CURLOPT_USERAGENT => "Google Bot", //設定AGENT
//    //CURLOPT_FILE => fopen("file","w"), //設定檔案(將結果輸入到檔案之中)
//    //CURLOPT_NOBODY => true, //不要顯示目的端資料
// );
// curl_setopt_array($ch,$options);
// // 设置URL和相应的选项
// // curl_setopt($ch, CURLOPT_URL, "https://dz99.com/ft/");
// // curl_setopt($ch, CURLOPT_HEADER, 0);
// // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0);
// // 抓取URL并把它传递给浏览器
// // $curl->init($params);
// // echo "<script>console.log(".$date.")</script>";
// $result_tmp = curl_exec($ch);
// // explode("<div",$str);
// // print_r($str);
// // echo $ch ;
// $lines = explode("</tr>",$result_tmp);
// $ResultData=array();
// for($i=1;$i<count($lines)-1;$i++){
//     unset($lines3);
//     $lines3 = explode("<td>",$lines[$i],2);
//     $lines4 = explode("&nbsp;",$lines3[1],2);
//     $ResultData[$i]['preDrawIssue']=str_replace("-","",$lines4[0]);
//     $lines5 = explode("</td>",$lines4[1],2);
//     $lines6 = explode("<i class=\"no",$lines5[1]);
//     for($j=0;$j<3;$j++){
//         $lines7 = explode("\">",$lines6[$j+1]);
//         $lines8 = explode("</i>",$lines7[1]);
//         $ResultData[$i]['preDrawCode'][$j]=$lines8[0];
//     }
// }

// // 关闭cURL资源，并且释放系统资源
// curl_close($ch);
// $Rand = Array();
// while(count($Rand)<20){
//     $Rand[] = rand(1,80);
//     $Rand = array_unique($Rand);
// }
// echo "<pre>",print_r($Rand),"</pre>";




// for($num=0;$num<480;$num++){

// }


#!/usr/local/bin/php -q
/**
 *  WOW時時彩-自動開賽果
 */

// $php_dir=$_SERVER['PHP_SELF'];
// $php_dir=explode("/",$php_dir);
// if($php_dir[2]!='d31'){
//     $php_dir="/{$php_dir[1]}/{$php_dir[2]}/{$php_dir[3]}";
// }else{
//     $php_dir="/{$php_dir[1]}/".$php_dir[2];
// }

//接受參數
// $debug_flag=false;
// $debugB_flag=false;
// if($_SERVER['argv'][1]=="debug"){
//     $debug_flag=true;
// }
// if($_SERVER['argv'][1]=="debugB"){
//     $debugB_flag=true;
// }
// $game_date=$_SERVER['argv'][2]; //如果現在的時間 要生成明日凌晨 請輸入現在的日期 如果要現在要生成今日的凌晨 請寫昨日日期


//初始參數
// $MonitorResult_tag="N";

//宣告LOG檔
//error_reporting(0);
// $today=getdate();
// $web_time_zone=8;//GMT時間 0 美東時間要-4
// $today_gmt=gmdate("Y-m-d",mktime($today['hours']+$web_time_zone,$today['minutes'],$today['seconds'],$today['mon'],$today['mday'],$today['year']));
// $logPATH=$php_dir."/ctl/log";

// ini_set('display_errors',1);
// set_time_limit(0);
// ini_set("memory_limit","1024M");
//宣告LOG檔-END


//trunk
//require($php_dir."/ctl/config/config_inc.php");
//require(STOCK_LIB_PATH."/mysqlilib.php");
//require(STOCK_LIB_PATH."/class_effect.php");
//require(STOCK_LIB_PATH."/class_memcache.php");
//require(STOCK_LIB_PATH."/pub_function.php");
//require(SB_LIB_PATH."/user/class_sb_member.php");
//require(D3_LIB_PATH."/user/class_d3_member.php");
//include(D3_LIB_PATH."/class_d3game.php");
//include(D3_LIB_PATH."/class_wjgame.php");
//include(D3_LIB_PATH."/d3_function.php");


//韓國官網專用
// define("SITE_PATH","/home/lotteryml");
// define("SQL_SHOW","1");
// require ("/home/lotteryml/config/config_inc.php");
// require (SITE_PATH."/lib/class_curl.php");
// require (SITE_PATH."/lib/mysqlilib.php");
// require (SITE_PATH."/lib/pun_function.php");


//trunk
//$db = new StockDB($db_host_arr[WJ_WEB_CODE]['GM'], $db_user_arr[WJ_WEB_CODE]['GM'], $db_passwd_arr[WJ_WEB_CODE]['GM'], $db_name_arr[WJ_WEB_CODE]['GM']);

//韓國官網專用
// $db = new StockDB($servername, $username, $password, $dbname, $dbport);



//參數
// $GameType='WJ';
// if($game_date!=""){
//     $set_t=strtotime($game_date);
//     $check_t=strtotime("2020-01-01");
//     if($set_t<$check_t)exit("date error");
// 	$today_gmt=$game_date;
// }

// $s_date_unix=strtotime($today_gmt);
// $s_date=date("Y-m-d",$s_date_unix);
// $e_date=$s_date;
// $e_date_unix=strtotime($e_date);
// $et_date=date("Y-m-d",strtotime($today_gmt."+ 1 day"));

//trunk
//$table_main="AutoGameResult";
//$table_main_tmp="AutoGameResultRandTmp";

//韓國官網專用
// $table_main="GameResultWJ";
// $table_main_tmp="GameResultWJTmp";

// $days=round(($e_date_unix-$s_date_unix)/3600/24);
// $day_arr=array();
// for($i=0;$i<=$days;$i++){
// 	$tmp_day=strtotime($s_date." + ".$i." day");
// 	$day_arr[]=substr(date("Ymd",$tmp_day),2,99);
// 	$day_real[]=date("Y-m-d",$tmp_day);
// }
// $day_real[]=$et_date;

// foreach($day_arr as $k=>$v){
//     for($i=1008;$i<=1152;$i++){
//         $GameNumArr[$i]=$v.str_pad($i, 4, "0", STR_PAD_LEFT);
//         if($i>816){
//             $day_game_real[$i]=$day_real[$k+1];
//         }else{
//             $day_game_real[$i]=$day_real[$k];
//         }
//     }
// }
// $day_game_timestap=makeTime();


// foreach($GameNumArr as $k=>$v){
//     $date_set=$day_game_real[$k];
//     //trunk
// //    $qstr="SELECT GameNum,COUNT(*) AS C FROM {$table_main} WHERE GameNum={$v} AND GameDate='{$date_set}'";
//     //官網專用
//     $qstr = "SELECT volume,COUNT(*) AS C FROM {$table_main} WHERE volume={$v} AND add_datetime>='{$date_set}'";
//     $db->query($qstr, 1);
//     $c_main = $db->f('C');
//     $qstr = "SELECT volume,COUNT(*) AS C FROM {$table_main_tmp} WHERE volume={$v} AND add_datetime>='{$date_set}'";
//     $db->query($qstr, 1);
//     $c = $db->f('C');
//     if($c_main>0 || $c>0){
//         continue;
//     }else{
//         if($date_set=="")continue;
//         if($day_game_timestap[$k]=="")continue;
//         $result_set=resultExport();
//         $data=array(
//             "volume"=>$v,
//             "add_datetime"=>$date_set." ".$day_game_timestap[$k],
//             "b1"=>$result_set[0],
//             "b2"=>$result_set[1],
//             "b3"=>$result_set[2],
//             "b4"=>$result_set[3],
//             "b5"=>$result_set[4],
//             "b6"=>0,
//             "b7"=>0,
//             "b8"=>0,
//             "b9"=>0,
//             "b10"=>0,
//         );
//         $qstr_i=sql_insert($table_main_tmp,$data);
//         if($debug_flag){
//             echo "sql=".$qstr_i."\n";
//         }elseif($debugB_flag){
//             echo "sql=".$qstr_i."\n";
//             $db->query($qstr_i);
//         }else{
//             $db->query($qstr_i);
//         }
//     }

// }

// // //製作時間差
function makeTime(){
    $tmp_arr=array();
    $tmp_s_time="07:01:00";
    for($i=1008;$i<1152;$i++){
        $tmp_arr[$i+1]=date("H:i:s" ,strtotime($tmp_s_time." +". $i ."minute + ".($i*15)."  second"));
    }
    return $tmp_arr;
}


// exit();

// function resultExport(){
//     $tmp_arr=array();
//     $tmp_arr[]=rand(0,100000)%10;
//     $tmp_arr[]=rand(0,100000)%10;
//     $tmp_arr[]=rand(0,100000)%10;
//     $tmp_arr[]=rand(0,100000)%10;
//     $tmp_arr[]=rand(0,100000)%10;
//     return $tmp_arr;
// }

$start = strtotime("2020-04-08 07:00:00");
$Rand = Array();
$Num = Array();
var_dump($Rand);
for($i=1;$i<=480;$i++){
    while(count($Rand)<20){
        $Rand[] = rand(1,80);
        $Rand = array_unique($Rand);
    }
    for($j=1;$j<=20;$j++){
        $startTime[]=date("yy-m-d H:i:s",$start+($j-1)*3*60);
        $endTime[]=date("yy-m-d H:i:s",$start+($j)*3*60-15);
    }
    $Num[$i]['Ans']=$Rand;
    $Num[$i]['start']=$startTime;
    $Num[$i]['end']=$endTime;
    unset($Rand);
    unset($startTime);
    unset($endTime);
}

echo "<pre>",print_r($Num),"</pre>";

?>