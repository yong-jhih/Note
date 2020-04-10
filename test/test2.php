<?php
    if(isset($_POST['filled'])){
        $str = preg_split('//',$_POST['filled']);
        for($i=1;$i<count($str)-1;$i++){
            $filled[] = $str[$i];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td {
            border: 1px solid black;
            width: 20px;
            height: 20px;
        }
        .black{
            background-color: black;
        }
        .white{
            background-color: white;
        }
    </style>
    <script>
        function tap(touch){
            console.log(touch);
            if(document.getElementById(touch).className=="black"){
                document.getElementById(touch).classList.add("white");
            }else{
                document.getElementById(touch).classList.add("black");
            }
        }
    </script>
</head>
<form action="test2.php" method="POST">
    <input type="text" name="filled">
    <button type="reset">reset</button>
    <button type="submit">submit</button>
    <hr>
</form>

<body>
    <table>
        <tr>
            <td id="1" onclick="tap('1')"></td>
            <td id="2" onclick="tap('2')"></td>
            <td id="3" onclick="tap('3')"></td>
            <td id="4" onclick="tap('4')"></td>
            <td id="5" onclick="tap('5')"></td>
            <td id="6" onclick="tap('6')"></td>
            <td id="7" onclick="tap('7')"></td>
            <td id="8" onclick="tap('8')"></td>
            <td id="9" onclick="tap('9')"></td>
            <td id="10" onclick="tap('10')"></td>
        </tr>
        <tr>
            <td id="11" onclick="tap('11')"></td>
            <td id="12" onclick="tap('12')"></td>
            <td id="13" onclick="tap('13')"></td>
            <td id="14" onclick="tap('14')"></td>
            <td id="15" onclick="tap('15')"></td>
            <td id="16" onclick="tap('16')"></td>
            <td id="17" onclick="tap('17')"></td>
            <td id="18" onclick="tap('18')"></td>
            <td id="19" onclick="tap('19')"></td>
            <td id="20" onclick="tap('20')"></td>
        </tr>
        <tr>
            <td id="21" onclick="tap('21')"></td>
            <td id="22" onclick="tap('22')"></td>
            <td id="23" onclick="tap('23')"></td>
            <td id="24" onclick="tap('24')"></td>
            <td id="25" onclick="tap('25')"></td>
            <td id="26" onclick="tap('26')"></td>
            <td id="27" onclick="tap('27')"></td>
            <td id="28" onclick="tap('28')"></td>
            <td id="29" onclick="tap('29')"></td>
            <td id="30" onclick="tap('30')"></td>
        </tr>
        <tr>
            <td id="31" onclick="tap('31')"></td>
            <td id="32" onclick="tap('32')"></td>
            <td id="33" onclick="tap('33')"></td>
            <td id="34" onclick="tap('34')"></td>
            <td id="35" onclick="tap('35')"></td>
            <td id="36" onclick="tap('36')"></td>
            <td id="37" onclick="tap('37')"></td>
            <td id="38" onclick="tap('38')"></td>
            <td id="39" onclick="tap('39')"></td>
            <td id="40" onclick="tap('40')"></td>
        </tr>
        <tr>
            <td id="41" onclick="tap('41')"></td>
            <td id="42" onclick="tap('42')"></td>
            <td id="43" onclick="tap('43')"></td>
            <td id="44" onclick="tap('44')"></td>
            <td id="45" onclick="tap('45')"></td>
            <td id="46" onclick="tap('46')"></td>
            <td id="47" onclick="tap('47')"></td>
            <td id="48" onclick="tap('48')"></td>
            <td id="49" onclick="tap('49')"></td>
            <td id="50" onclick="tap('50')"></td>
        </tr>
        <tr>
            <td id="51" onclick="tap('51')"></td>
            <td id="52" onclick="tap('52')"></td>
            <td id="53" onclick="tap('53')"></td>
            <td id="54" onclick="tap('54')"></td>
            <td id="55" onclick="tap('55')"></td>
            <td id="56" onclick="tap('56')"></td>
            <td id="57" onclick="tap('57')"></td>
            <td id="58" onclick="tap('58')"></td>
            <td id="59" onclick="tap('59')"></td>
            <td id="60" onclick="tap('60')"></td>
        </tr> 
        <tr>
            <td id="61" onclick="tap('61')"></td>
            <td id="62" onclick="tap('62')"></td>
            <td id="63" onclick="tap('63')"></td>
            <td id="64" onclick="tap('64')"></td>
            <td id="65" onclick="tap('65')"></td>
            <td id="66" onclick="tap('66')"></td>
            <td id="67" onclick="tap('67')"></td>
            <td id="68" onclick="tap('68')"></td>
            <td id="69" onclick="tap('69')"></td>
            <td id="70" onclick="tap('70')"></td>
        </tr>
        <tr>
            <td id="71" onclick="tap('71')"></td>
            <td id="72" onclick="tap('72')"></td>
            <td id="73" onclick="tap('73')"></td>
            <td id="74" onclick="tap('74')"></td>
            <td id="75" onclick="tap('75')"></td>
            <td id="76" onclick="tap('76')"></td>
            <td id="77" onclick="tap('77')"></td>
            <td id="78" onclick="tap('78')"></td>
            <td id="79" onclick="tap('79')"></td>
            <td id="80" onclick="tap('80')"></td>
        </tr>
        <tr>
            <td id="81" onclick="tap('81')"></td>
            <td id="82" onclick="tap('82')"></td>
            <td id="83" onclick="tap('83')"></td>
            <td id="84" onclick="tap('84')"></td>
            <td id="85" onclick="tap('85')"></td>
            <td id="86" onclick="tap('86')"></td>
            <td id="87" onclick="tap('87')"></td>
            <td id="88" onclick="tap('88')"></td>
            <td id="89" onclick="tap('89')"></td>
            <td id="90" onclick="tap('90')"></td>
        </tr>
        <tr>
            <td id="91" onclick="tap('91')"></td>
            <td id="92" onclick="tap('92')"></td>
            <td id="93" onclick="tap('93')"></td>
            <td id="94" onclick="tap('94')"></td>
            <td id="95" onclick="tap('95')"></td>
            <td id="96" onclick="tap('96')"></td>
            <td id="97" onclick="tap('97')"></td>
            <td id="98" onclick="tap('98')"></td>
            <td id="99" onclick="tap('99')"></td>
            <td id="100" onclick="tap('100')"></td>
        </tr>
        <tr>
            <td id="101" onclick="tap('101')"></td>
            <td id="102" onclick="tap('102')"></td>
            <td id="103" onclick="tap('103')"></td>
            <td id="104" onclick="tap('104')"></td>
            <td id="105" onclick="tap('105')"></td>
            <td id="106" onclick="tap('106')"></td>
            <td id="107" onclick="tap('107')"></td>
            <td id="108" onclick="tap('108')"></td>
            <td id="109" onclick="tap('109')"></td>
            <td id="110" onclick="tap('110')"></td>
        </tr>
    </table>
    <script>
        if(<?php isset($_POST['filled']) ?>){
            document.getElementById().classList.add("black");
        }
    </script>
</body>
</html>