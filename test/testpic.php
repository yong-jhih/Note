<?php
    $str = "" ;
    if(isset($_POST['ans']) && isset($_POST['set']) && is_string($_POST['set'])){
        $input = explode(",",$_POST['ans']);
        for($i=0;$i<count($input);$i++){
            if($input[$i]!=0){
                $str .= $i+1 ;
            }
        }
        if($_POST['set']==$str){
            echo "<script>alert('ok')</script>";
            unset($_POST);
        }else{
            echo "<script>alert('error')</script>";
        }
    }else{
        unset($_POST);
        exit();
    }
?>
<!DOCTYPE html>
<head>
    <style>
        td{
            border: 2px solid black;
            border-collapse: collapse;
        }

        .selected{
            border: 2px solid red;
        }
    </style>
</head>
<body>
    please chose The number 
    <?php
        $num1 = $num2 = $num3 = rand(1,9);
        while($num1==$num2 || $num1==$num3 || $num3==$num2){
            $num2 = rand(1,9);
            $num3 = rand(1,9);
        }
        $rand = array($num1,$num2,$num3);
        sort($rand);
        // echo "<pre>",print_r($rand),"</pre>";
        echo implode($rand);
    ?>
    <table>
        <tr>
            <td id="1" onclick="changeClass(1)"><img src="1.png"></td>
            <td id="2" onclick="changeClass(2)"><img src="2.png"></td>
            <td id="3" onclick="changeClass(3)"><img src="3.png"></td>
        </tr>
        <tr>
            <td id="4" onclick="changeClass(4)"><img src="4.png"></td>
            <td id="5" onclick="changeClass(5)"><img src="5.png"></td>
            <td id="6" onclick="changeClass(6)"><img src="6.png"></td>
        </tr>
        <tr>
            <td id="7" onclick="changeClass(7)"><img src="7.png"></td>
            <td id="8" onclick="changeClass(8)"><img src="8.png"></td>
            <td id="9" onclick="changeClass(9)"><img src="9.png"></td>
        </tr>
    </table>
    <form action="testpic.php" method="POST">
        <input type="hidden" name="ans" id="ans" value="">
        <input type="hidden" name="set" id="set" value="<?php echo implode($rand) ?>">
        <button type="submit">submit</button>
    </form>
<script>
    let is_selected = new Array(9) ;
    for(i=0;i<9;i++){
        is_selected[i]='0';
    }
    function changeClass(frameId){
        if(document.getElementById(frameId).className=="selected"){
            document.getElementById(frameId).classList.remove('selected');
            is_selected[frameId-1]='0';
        }else{
            document.getElementById(frameId).classList.add('selected') ;
            is_selected[frameId-1]='1';
        }
        document.getElementById('ans').value = is_selected.join() ;
    }
</script>
</body>
</html>