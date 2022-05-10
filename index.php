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
        <input type="text" id="marks" name = "marks" placeholder="Enter marks">
        <input type="submit">
    </form>
    <?php
        $marks =  $_GET['marks']; 
        if($marks>=60)  echo "First Division";
        elseif($marks>=45 && $marks<=59)  echo "Second Division";
        elseif($marks>=33 && $marks<=44)  echo "Third Division";
        else echo "Fail";
    ?>
</body>
</html>