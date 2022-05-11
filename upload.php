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
        // if($_SERVER['REQUEST_METHOD']=="POST"){
            if(isset($_POST['submit'])){
                $file_name = $_FILES['file']['name'];
                $file_type = $_FILES['file']['type'];
                $file_tmp_name = $_FILES['file']['tmp_name'];
                $file_size = $_FILES['file']['size'];
                $file_store = "upload/".$file_name;
                if($file_type!="image/png")   echo '<p style="color:red">Only png file accepted</p>';
                else if($file_size>=200000)   echo '<p style="color:red">Only 2mb file size accepted</p>';
                else{
                    if(move_uploaded_file($file_tmp_name,$file_store)){
                        echo "<p style='color:green;margin:10% 40%'>File uploaded Succesfully</p>";
                    }
                    else echo "<p style='color:red'>Some error occured while uploading</p>";
                }
            }
        // }
    ?>
    <form style="margin:20% 40%" action="?" method="post" enctype="multipart/form-data">
        <input type="file" Required name="file" id=""><br><br>
        <input type="submit" value="UPLOAD IMAGE" name="submit">
    </form>
</body>
</html>