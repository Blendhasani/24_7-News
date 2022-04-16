<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

    <input type="text" name="emri" placeholder = "name..."><br><br>
    <input type="text" name="mbiemri" placeholder = "surname..."><br><br>
    <input type="" name="mosha" placeholder = "age..."><br><br>
    <input type="email" name="emaili" placeholder = "email..."><br><br>
    <input type="password" name="passi" placeholder = "password..."><br><br>
    <input type="password" name="confpass" placeholder = "confirmPassword..."><br><br>

    <input type="submit" name="registerBtn" value="register"><br><br>
    </form>


        <?php include_once '../controller/registerController.php';?>
</body>
</html>