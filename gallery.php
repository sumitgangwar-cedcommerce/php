<?php
    session_start();
?>
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
        
        img{
            width:50%;
            height:50%;
        }
        .main{
            display:flex;
            flex-wrap:wrap;
            
        }
        .inn{
            width : 200px;
            margin : 20px;
        }
    </style>
    
    <div>
        <form action="?" method="post" enctype="multipart/form-data">
            <input type="file" Required name="img"><br><br>
            <input type="submit" name="submit" value="Upload image">
        </form>
    </div>

    <?php
        if(isset($_POST['submit'])){
            
            move_uploaded_file($_FILES['img']['tmp_name'],"upload/".$_FILES['img']['name']);
            

            $_SESSION[$_FILES['img']['name']]="upload/".$_FILES['img']['name'];
        }
    ?>

    
        <div class="main">
        
            <?php
            foreach($_SESSION as $name=>$loc){?>
                <div class="inn">
                    <img src="<?php echo $loc;?>" alt=""><br>
                    <?php echo $name;?>
                </div>
            <?php }?>
        
        </div>
           
       


</body>
</html>