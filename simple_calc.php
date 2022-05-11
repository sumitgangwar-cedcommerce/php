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
    table{
        margin-left: 30%;
        margin-top: 10%;
    }
</style>

<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST["submit"])){
        $a = $_POST['a'];
        $b = $_POST['b'];
        if($a=="")  $aerr = "*Required";
        if($b=="")  $berr = "*Required";
        if($a!="" & $b!="" ){
            switch ($_POST["submit"]){
                case "*":
                    $res = $a*$b;
                    break;
                case "+":
                    $res = $a+$b;
                    break;
                case "-":
                    $res = $a-$b;
                    break;
                case "/":
                    $res = $a/$b;
                    break;
                default:
                    $res = "Wrong Input";
                    break;
            }
       }}
    }
        ?>
    <form action="simple_calc.php" method="post">
        <table>
            <tr>
                <td>Number 1</td>
                <td><input type="number" name="a"></td>
                <td><p class="err"><?php echo $aerr;?></p></td>
            </tr>
            <tr>
                <td> Number 2 </td>
                <td><input type="number" name="b"></td>
                <td><p class="err"><?php echo $berr;?></p></td>
            </tr>
            <tr>
                <td>Result</td>
                <td><input type='text' disabled value="<?php echo (isset($res))?$res:'';?>"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="*">
                    <input type="submit" name="submit" value="+">
                    <input type="submit" name="submit" value="/">
                    <input type="submit" name="submit" value="-">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>