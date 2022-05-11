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
        form , div{
            margin-left:30%;
            margin-top:10%;
        }
    </style>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(isset($_POST['submit'])){
                $length = $_POST['length'];
                $width = $_POST['width'];
                if($length=="" || $width ==""){
                    if($length=="") $lenerr="*Length is required";
                    if($width=="") $widtherr="*Width is required";
                }
                else{
                    $area = $length*$width;
                    $perimeter = 4*($length+$width);
                }
            }
        }
    ?>
    <form action="calc_area.php" method="post">
        <table>
            <tr>
                <td>Length Of Reactangle</td>
                <td><input type="number" name="length" placeholder="Enter Length in mtr"></td>
                <td class="err"><?php echo $lenerr;?></td>
            </tr>
            <tr>
                <td>width Of Reactangle</td>
                <td><input type="number" name="width" placeholder="Enter width in mtr"></td>
                <td class="err"><?php echo $widtherr;?></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Calculate Area & perimeter" name="submit"></td>
            </tr>
        </table>
    </form>
    <div>
        <p>
            <?php 
                echo (isset($area))? "Area is ".$area." sq.mtr.":"";
            ?>
        </p>
        <p><?php echo (isset($perimeter))? "Perimeter is ".$perimeter." mtr":"";?></p>
    </div>
</body>
</html>