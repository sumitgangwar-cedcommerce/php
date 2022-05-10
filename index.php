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
    echo "<table style='width=400px ; border-collapse = collapse;margin:0px;padding:0px' >";
    $t = 0;
       for($i=0;$i<9;$i++){
           echo "<tr style='border: solid;margin:0px;padding:0px'>";
    
        for($j=0;$j<9;$j++){
           if($t==0){
            echo "<td  style='height=30px ; background-color: black;border: solid; margin:0px; padding:0px'>sfcf</td>";
            $t = 1;
           }
           else{
            echo "<td style='height=30px ; background-color = white ; color:  white;border:solid;margin:0px;padding:0px'>rrr</td>";
            $t = 0;
           } 
           
        }
            echo "</tr>";    
       }
    echo "</table>"; 
    ?>
</body>
</html>