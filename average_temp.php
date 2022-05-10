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
        $temp_arr = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73 , 81);
        sort($temp_arr);
        echo "List of five lowest temprature : ";
        $temp = 0;
        for($i=0;$temp<5;$i++){
            if($temp_arr[$i]!=$temp_arr[$i+1]){
                $temp++;
                echo $temp_arr[$i]." ";
            }
        } 
        $temp = 0;   
        rsort($temp_arr);
        $heigh = array();
        echo "<br>List of five heigest temprature : ";
        for($i=0;$temp<5;$i++){
            if($temp_arr[$i]!=$temp_arr[$i+1]){
                $heigh[$temp]=$temp_arr[$i];
                $temp++;
            }
        }
        for($i=4;$i>-1;$i--){
            echo $heigh[$i]." ";
        } 
    ?>
</body>
</html>