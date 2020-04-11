<?php
    // $mysqli = new mysqli('localhost','root','','product') or die("無法建立資料連接: " . mysqli_connect_error());
    
    // $sql = "SELECT * FROM price WHERE category = '主機板'";
    // $result = mysqli_query($mysqli,$sql);
    // $meta = mysqli_fetch_row($result);
    // echo "<h1>";
    // echo $meta;
    // echo "</h1>";

    // $time = getdate();
    // $weekDay = $time['wday'];
    // $strWeekDay="";
    // switch($weekDay){
    //     case 0:$strWeekDay="星期日";break;
    //     case 1:$strWeekDay="星期一";break;
    //     case 2:$strWeekDay="星期二";break;
    //     case 3:$strWeekDay="星期三";break;
    //     case 4:$strWeekDay="星期四";break;
    //     case 5:$strWeekDay="星期五";break;
    //     case 6:$strWeekDay="星期六";break;
    //     default;
    // }
    // echo "現在時間是".$time['hours'].":".$time['minutes'].":".$time['seconds'].",".$strWeekDay."<br>";
    // echo gmdate("H:i:s")."<br>";

    // $unixTime = time();
    // echo $unixTime;

    // $path = getcwd();
    // mkdir($path,null,true);
    // var_dump($path);
    // echo basename($path)."<br>";
    // var_dump(pathinfo($path));
    // mkdir()

    // $testOpen=fopen("test.txt","a+");
    // if($testOpen){
    //     $contents = nl2br(fread($testOpen,filesize("test.txt")));
    //     echo $contents."<br>";
    // }
    
    // $timeNow = gmdate("Y/m/d H:i:s")."\r\n";
    // $write = file_put_contents("test.txt",$timeNow);
    // if(fclose($testOpen)){
    //     echo "closed success";
    // }else{
    //     echo "close error";
    // }

   
    // echo nl2br(file_get_contents("test.txt"));
    $fp = fopen('https://rate.bot.com.tw/xrt?Lang=zh-TW','r');
    $fpw = fopen('20191217.html', 'w');
    echo var_dump($fp)."<br>";
    // echo gettype($fp);
    while ( ($line = fgets($fp)) !== false){
        fwrite($fpw, $line);
    }

    fclose($fpw);
    fclose($fp);

    $fgc = file_get_contents('https://rate.bot.com.tw/xrt?Lang=zh-TW');
    echo $fgc;
    
?>