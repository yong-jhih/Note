<?php
echo nl2br("foo isn‘t\n bar");
echo "foo isn‘t\n bar";
exit;
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
$curl = curl_init();
$options = array(
   CURLOPT_URL => "http://www.jlfc.com.cn/View/SSC_WinInfo.aspx", //網址
//    CURLOPT_POST => true, //開啟POST
//    CURLOPT_POSTFIELDS => http_build_query($params), //POST參數
//    CURLOPT_FOLLOWLOCATION => true,  //是否要抓取轉址
   CURLOPT_RETURNTRANSFER => true , //只傳回結果，不輸出在畫面上
   CURLOPT_HEADER => false //顯示HEADER資訊
//    CURLOPT_USERAGENT => "Google Bot", //設定AGENT
//    CURLOPT_FILE => fopen("file","w"), //設定檔案(將結果輸入到檔案之中)
//    CURLOPT_NOBODY => true, //不要顯示目的端資料
);
curl_setopt_array($curl,$options);
$result = curl_exec($curl);
// $tmpA=explode("td_play_reward td4",$result);
// for($i=0;$i<10;$i++){
// 	$result_arr[]=$tmpA[$i];
// }
echo "<pre>",print_r($result),"</pre>";
// 关闭cURL资源，并且释放系统资源
// curl_close($ch);


// function GetGameResult_jlfc_img($_proxy=''){
   // $this->_GameSite='jlfc_img'; // 賽果來源代號
//   $curl=new CurlRequest();
//   $curl->proxy=$_proxy;

//   $params = array('url' => "http://www.jlfc.com.cn/View/SSC_WinInfo.aspx",
//   'host' => 'www.jlfc.com.cn',
//   'header' => '',
//   'method' => 'GET',
//   'referer' => '',
//   'cookie' => '',
//   'timeout' => 20
//   );
//   if($_SERVER['argv'][2]=='debug' || $_SERVER['argv'][2]=='debugB'){
//      echo __FUNCTION__ ." ".$params['url']."\nproxy=".$_proxy."\n";
//   }
//   $curl->init($params);
//   $result = $curl->exec();
//   if($result['body']=="")print_r($result);

  $tmpA=explode("td_play_reward td4",$result);
  for($i=1;$i<10;$i++){
     $result_arr[]=$tmpA[$i];
  }

//   echo "<pre>",print_r($result),"</pre>" ;
//   $this->_Monitor = "N";
//   unset($this->_BalanceData);
//   $this->_NewGame=false;
//   if(count($result_arr)>0){
//      $i=0;
//      foreach ((array)$result_arr AS $key=>$Result){
//         $tmp1=explode('28px;">',$Result);
//         $tmp2=explode('</td>',$tmp1[1]);

//         $TmpGameNum= preg_replace('/\s+/', '', $tmp2[0]);

//         if (preg_match("/^[0-9]{9}$/",$TmpGameNum)) {
               // $this->_BalanceData[$i]['GameDate'] = "20".substr($TmpGameNum,0,2)."-".substr($TmpGameNum,2,2)."-".substr($TmpGameNum,4,2);

         //   $this->_BalanceData[$i]['GameNum'] = $TmpGameNum;
         //   $this->_Monitor = "Y";
         //   if($i==0){
            //   if($this->BalanceGameNum != $TmpGameNum){
            //      $this->BalanceGameNum = $TmpGameNum;
            //      $this->_NewGame=true;
            //   }
      //      }
      //   }

      //   $tmp3=explode("<li class='red_ball'>",$tmp2[1]);
      //   $tmp3[1]=explode("</li>",$tmp3[1]);
      //   $tmp3[2]=explode("</li>",$tmp3[2]);
      //  $tmp3[3]=explode("</li>",$tmp3[3]);
      //  $tmp3[4]=explode("</li>",$tmp3[4]);
      //   $tmp3[5]=explode("</li>",$tmp3[5]);

       //開獎結果
      //  $this->_BalanceData[$i]['Result'][0] = $tmp3[1][0];//萬 Num3
      //   $this->_BalanceData[$i]['Result'][1] = $tmp3[2][0];//千 Num2
      //   $this->_BalanceData[$i]['Result'][2] = $tmp3[3][0];//百 Num3
      //   $this->_BalanceData[$i]['Result'][3] = $tmp3[4][0];//十 Num2
      //   $this->_BalanceData[$i]['Result'][4] = $tmp3[5][0];//個 Num1

      //   if($this->_BalanceData[$i]['GameNum']=="" ||
      //   $this->_BalanceData[$i]['Result'][0]=="" ||
      //   $this->_BalanceData[$i]['Result'][1]=="" ||
      //   $this->_BalanceData[$i]['Result'][2]=="" ){
      //      unset($this->_BalanceData[$i]);
      //      continue;
      //   }

      //   if($_SERVER['argv'][2]=='debug' || $_SERVER['argv'][2]=='debugB'){
      //      echo $this->_BalanceData[$i]['GameDate']
      //              ." => ".$this->_BalanceData[$i]['GameNum']
      //      .":".$this->_BalanceData[$i]['Result'][0]
      //      .",".$this->_BalanceData[$i]['Result'][1]
      //      .",".$this->_BalanceData[$i]['Result'][2]
      //      ."\n";
      //   }
//         $i++;
//      }
//   }
//   if($this->_NewGame && $_SERVER['argv'][2]!='debug'){
//      $this->InsertBalance();
//   }
//   return $this->_Monitor;
// }
?>