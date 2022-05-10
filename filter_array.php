<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
         $arr_1st = array("c1" => 'Red', 'c2' => 'Green', 'c3' => 'White','c4' => 'Black');
         $arr_2nd = array('c2', 'c4');
         echo "Array"."<br>"."("."<br>";
         foreach($arr_1st as $x=>$val){
             $var = 1;
             foreach ($arr_2nd as $key) {
                 if($x==$key)   $var = 0;
             }  
             if($var)   echo "[".$x."]=>".$val."<br>";
         }
         echo ")";
    ?>
</body>
</html>