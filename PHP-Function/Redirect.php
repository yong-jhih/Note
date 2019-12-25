<?php
    
    // in PHP : 
    // header('location:url'); 立即跳轉
    // header("Refresh:秒數;url=地址"); 會在X秒後執行跳轉
    // sleep(X); header("location:url地址") 調用了sleep()方法,效果也是x秒後執行跳轉

    // in JavaScript :
    // window.location.href="url"; 立即跳轉
    // setTimeout("window.location.href='url'",3000); 會在3秒後執行跳轉
    // window.location.replace('url'); 讓新頁面替換掉當前頁面，不會保存在歷史記錄裏，所以不能使用瀏覽器後退到原頁面了
    // window.open("url",_blank,width=300px); 三個參數，第一個URL地址。第二個打開新頁面方式（比如新頁面_blank,_new,自身跳轉_self）,第三個是新頁面的方式，包括樣式，位置等。

    // in HTML :
    // <meta http-equiv="refresh" content="3;url='url'"> 插入在<head>標籤中 頁面載入完成後3秒鐘自動跳轉目標頁面

?>