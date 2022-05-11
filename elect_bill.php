<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="elect_bill.php" method="post">
        <input type="text" name="units" placeholder="Enter Units to Generate bill">
        <input type="submit" value="Submit">
    </form>
    <?php
        $units =  $_POST['units'];
        // if($units);
        if(intval(is_numeric($units))){
            if($units<=50)  echo "Your bill:- ".$units*3.50;
            elseif($units<=150)  echo "Your bill:- ".$units*4.00;
            elseif($units<=250)  echo "Your bill:- ".$units*5.20;
            else  echo "Your bill:- ".$units*6.50;
        }else   echo "Units Should be integer";
    ?>
</body>
</html>