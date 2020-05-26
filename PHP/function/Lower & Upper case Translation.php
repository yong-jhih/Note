<?php
    $strFirstLower = "heLLo evEryBody , I'm pEte.";
    $strFirstUpper = "Good Morning , Nice To Meet You";
    echo "<h2>Original</h2>";
    echo '<p>$strFirstLower='.$strFirstLower.'<br>$strFirstLower='.$strFirstUpper."</p>";
    echo "<h2>Function</h2>";
    echo 'strtolower($strFirstLower):'.strtolower($strFirstLower)."<br>"; // 全轉小寫
    echo 'strtoupper($strFirstLower):'.strtoupper($strFirstLower)."<br>"; // 全轉大寫
    echo 'ucwords($strFirstLower):'.ucwords($strFirstLower)."<br>"; // 句中每個詞 首字轉大寫
    echo 'ucfirst($strFirstLower):'.ucfirst($strFirstLower)."<br>"; // 句中首字轉大寫
    echo 'lcfirst($strFirstUpper):'.lcfirst($strFirstUpper)."<br>"; // 句中首字轉小寫
    echo '<hr>';
    echo 'ucwords(strtolower($strFirstLower)):'.ucwords(strtolower($strFirstLower))."<br>"; // 句中每個詞首字轉大寫 其餘轉小寫
    echo 'ucfirst(strtolower($strFirstLower)):'.ucfirst(strtolower($strFirstLower))."<br>"; // 大寫句中首字 其餘轉小寫
?>