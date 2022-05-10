<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="item" placeholder="Enter Item">
        <input type="text" name="ind" placeholder = "Enter Index number">
        <input type="submit" value="Submit">
    </form>
    <?php
        $arr = array(1,2,3,4,5);
        $item = $_GET['item'];
        $ind = $_GET['ind'];
        array_splice($arr , $ind , 0 , $item);
        foreach($arr as $val){
            echo $val."<br>";
        }
    ?>
</body>
</html>