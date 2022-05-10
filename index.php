<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="form" action="index.php" method="get">
        <input type="text"  name = "number" placeholder="Enter number">
        <input type="submit">
    </form>
    <?php
        $number =  $_GET['number']; 
        $fact = 1;
        for($number;$number>1;$number--){
            $fact*=$number;
        }
        echo $fact;
        
    ?>
</body>
</html>