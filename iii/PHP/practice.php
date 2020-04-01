<table border="1" width="100%">
    <?php
        $n =100 ;          
        for($m=2;$m<$n;$m++){
            $isPrime = true ; //先假定範圍內所有數字皆為質數 
            for($o=2;$o<$m;$o++){
                if($m % $o ==0){
                    $isPrime = false ; //如可被1或自己外的數整除則不為質數
                }
            }
            if($isPrime==true){
                $a=array();
                array_push($a,$m); //產生一個一維陣列,其值為質數
            }
        }
        
        echo "<hr>" ;
        for ($i=0;$i<10;$i++){ //繪製表格tr
            echo '<tr>';
            for ($j=1;$j<11;$j++){ //繪製表格td
                $number = array() ;//設定表格數字
                array_push($number,($i*10 + $j));//產生一個一維陣列,其值為1~100
               
                echo '<td>';
                echo $number[0] ; //填入表格數字
                echo '</td>';
            }
            echo '</tr>';
        }
    ?>
</table>