<?php

// 建立連線取得網頁資料
$curl = curl_init();
$options = array(
    CURLOPT_URL =>"https://rate.bot.com.tw/xrt?Lang=zh-TW",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HEADER => false
);
curl_setopt_array($curl,$options);
$result = curl_exec($curl);

// 取得資料時間
$get_data_time = explode('<span class="time">',$result);
array_splice($get_data_time,0,1);
$get_data_time = substr(implode($get_data_time),0,16);
echo "台灣銀行牌告匯率取得時間 ".$get_data_time."<hr>" ;

// 取得匯率
$currency = array();
$rate_data = explode("<tr>",$result);
array_splice($rate_data,0,3);

for($i=0;$i<count($rate_data);$i++){

    // 取得貨幣種類
    $get_currency[$i] = explode('<div class="visible-phone print_hide">',$rate_data[$i]);
    $currency[$i] = trim(substr($get_currency[$i][1],0,68)) ;
    
    // 取得匯率
    $get_rate[$i]['cash_buy'] = explode('</td>',explode('<td data-table="本行現金買入" class="rate-content-cash text-right print_hide">',$rate_data[$i])[1])[0];
    $get_rate[$i]['cash_sale'] = explode('</td>',explode('<td data-table="本行現金賣出" class="rate-content-cash text-right print_hide">',$rate_data[$i])[1])[0];
    $get_rate[$i]['bank_buy'] = explode('</td>',explode('<td data-table="本行即期買入" class="rate-content-sight text-right print_hide" data-hide="phone">',$rate_data[$i])[1])[0];
    $get_rate[$i]['bank_sale'] = explode('</td>',explode('<td data-table="本行即期賣出" class="rate-content-sight text-right print_hide" data-hide="phone">',$rate_data[$i])[1])[0];

    echo $currency[$i]."<br>";
    echo "<li> 本行現金買入: ".$get_rate[$i]['cash_buy']."</li>";
    echo "<li> 本行現金賣出: ".$get_rate[$i]['cash_sale']."</li>";
    echo "<li> 本行即期買入: ".$get_rate[$i]['bank_buy']."</li>";
    echo "<li> 本行即期賣出: ".$get_rate[$i]['bank_sale']."</li>";
    echo "<hr>";

}

curl_close($curl);
?>