<?php
    if(isset($_POST['filled'])){
        $str2 = "" ;
        $str = preg_split('//',$_POST['filled']);
        for($i=1;$i<count($str)-1;$i++){
            $str2 .= $str[$i];
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
            width: 30px;
            height: 30px;
        }
        .black{
            background-color: black;
        }
        .white{
            background-color: white;
        }
    </style>
</head>
<body>
    <form action="test2.php" method="POST">
        <input type="text" name="filled">
        <button type="reset">reset</button>
        <button type="submit">submit</button>
        <p id="code">...</p>
        <hr>
    </form>
    <table>
    <script type="text/javascript">
        let code = Array(110);
        let output = "" ;
        for(let j = 1;j<12;j++){
            document.write("<tr>");
            for(let i = 1 ;i<11;i++){
                document.write('<td id="'+(i+(j-1)*10)+'" onclick="tap('+(i+(j-1)*10)+')" class="white"></td>');
            }
            document.write("</tr>");
        }

        function tap(touch){
            if(document.getElementById(touch).className=="black"){
                document.getElementById(touch).classList.remove("black");
                document.getElementById(touch).classList.add("white");
            }else{
                document.getElementById(touch).classList.remove("white");
                document.getElementById(touch).classList.add("black");
            }

            for(let n = 1 ; n < 111 ; n++){
                if(document.getElementById(n).getAttribute("class")=="black"){
                    output += 1 ;
                }else{
                    output += 0 ;
                }
            }
            document.getElementById("code").innerHTML = output ;
            output = "" ;
        }

        let picNum = "<?php echo $str2 ?>"
        if(picNum!=""){
            picNum = picNum.split("");
            for(let m = 0 ; m < 110 ; m++ ){
                if(picNum[m]!=0 && picNum[m]!=null){
                    document.getElementById(m+1).classList.remove("white");
                    document.getElementById(m+1).classList.add("black");
                }else{
                    document.getElementById(m+1).classList.remove("black");
                    document.getElementById(m+1).classList.add("white");
                }
            }
        }else{
            for(let m = 0 ; m < 110 ; m++ ){
                document.getElementById(m+1).classList.remove("black");
                document.getElementById(m+1).classList.add("white");
            }
        }
    </script>
    </table>
</body>
</html>