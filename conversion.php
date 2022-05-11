<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .err{
            color:red;
        }
        form{
            margin-left: 30%;
            margin-top : 10%;
        }
        #btn{
            width:50vh;
            padding:1vh;
            justify-content : center;  
        }
        #res{
            margin-left:15vh;
        }
    </style>
    <?php
        if(isset($_POST["submit"])){
            $num = $_POST['num'];
            $type = $_POST['inp'];
            
            if($num=="")    $errnum = "Required";
            if($type=="")   $errradio = "Select radio button";
            if($num!="" & $type!=""){   
            if($type=="minutes")    $res = $num*60;
            if($type=="second") $res2 = $num*3600;
            }    
        }
    ?>
    <form action="conversion.php" method="post">
        <div>
            <input name="num" id="btn" type="number"><span class="err"><?php echo isset($errnum)? $errnum:'';?></span><br><br>
            <input type="radio" name="inp" value="minutes">hours to mins<br><br>
            <input type="radio" name="inp" value="second">hours to seconds <br><br>
            <div id="res"><p class="err"><?php echo isset($errradio)?$errradio:'';?></p></div>
            <p id="res"><?php echo isset($res)? $num." hour = ".$res." mins":'' ?> </p>
            <p id="res"><?php echo isset($res2)? $num." hour = ".$res2." second":'' ?> </p>
            <input type="submit" name="submit" id="btn" value="Convert">

        </div>
    </form>
</body>
</html>