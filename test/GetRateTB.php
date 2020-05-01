<?php
// 資料庫連線
$link = mysqli_connect('localhost','root','','guestbook');
mysqli_query($link, "SET NAMES utf8");

// 設定連線
$curl = curl_init();
$options = array(
    CURLOPT_URL =>"https://rate.bot.com.tw/xrt?Lang=zh-TW",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HEADER => false ,
    CURLOPT_CONNECTTIMEOUT => 30 ,
    CURLOPT_TIMEOUT => 60
);
curl_setopt_array($curl,$options);

do{
    $result = curl_exec($curl);
    if(isset($result) && $result!=''){
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
            $currency[$i] = (String)trim(substr($get_currency[$i][1],0,68)) ;

            // 取得匯率
            $cash_buy[$i] = (Float)explode('</td>',explode('<td data-table="本行現金買入" class="rate-content-cash text-right print_hide">',$rate_data[$i])[1])[0];
            $cash_sale[$i] = (Float)explode('</td>',explode('<td data-table="本行現金賣出" class="rate-content-cash text-right print_hide">',$rate_data[$i])[1])[0];
            $bank_buy[$i] = (Float)explode('</td>',explode('<td data-table="本行即期買入" class="rate-content-sight text-right print_hide" data-hide="phone">',$rate_data[$i])[1])[0];
            $bank_sale[$i] = (Float)explode('</td>',explode('<td data-table="本行即期賣出" class="rate-content-sight text-right print_hide" data-hide="phone">',$rate_data[$i])[1])[0];

            echo $currency[$i]."<br>";
            echo "<li> 本行現金買入: ".$cash_buy[$i] ."</li>";
            echo "<li> 本行現金賣出: ".$cash_sale[$i]."</li>";
            echo "<li> 本行即期買入: ".$bank_buy[$i] ."</li>";
            echo "<li> 本行即期賣出: ".$bank_sale[$i]."</li>";
            echo "<hr>";

            $sql = "INSERT INTO `raterecords` ( `Time` , `Currency` , `Cash_Buy` , `Cash_Sale` , `Bank_Buy` , `Bank_Sale` ) VALUES ('$get_data_time','$currency[$i]','$cash_buy[$i]','$cash_sale[$i]','$bank_buy[$i]','$bank_sale[$i]')" ;
            $data = mysqli_query($link,$sql); 
        }
    }else{
        sleep(10);
    }
    
}while(!isset($result) || $result=='');

// 讀取繪製圖表用資料
$chart = array();
$end2 = "" ;
$sql = "SELECT * FROM `raterecords` WHERE Currency LIKE '%USD%' ORDER BY UpdateTime DESC";
$data = mysqli_query($link,$sql);
for($j=0;$j<$data->num_rows;$j++){
    $end[$j] = mysqli_fetch_assoc($data);
    $end2 .= 
    "[".
        // $end[$j]['Time'].",".
        $j.",".
        $end[$j]['Cash_Buy'].",".
        $end[$j]['Cash_Sale'].",".
        $end[$j]['Bank_Buy'].",".
        $end[$j]['Bank_Sale'].
    "]" ;
    if($j<$data->num_rows-1){
        $end2 .= "," ;
    }
}
// echo json_encode($end);
// echo "<pre>",print_r($end),"</pre>" ;
curl_close($curl);
mysqli_close($link);
?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Time', 'CASH-BUY', 'CASH-SALE' , 'BANK-BUY' , 'BANK-SALE'],
          <?php
            echo $end2 ;
          ?>
        ]);

        var options = {
          title: 'Company Performance',
          hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

                var options_fullStacked = {
          isStacked: 'relative',
          height: 300,
          legend: {position: 'top', maxLines: 3},
          vAxis: {
            minValue: 0,
            ticks: [0, .3, .6, .9, 1]
          }
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 100%; height: 500px;"></div>
  </body>
</html>