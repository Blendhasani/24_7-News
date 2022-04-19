<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css" type="text/css">
    <title>Document</title>
</head>
<body>
<style>

<?php
include "../style.css";
?>
</style> 
<p class="edit_user">Register User :</p>
<div class="forma_edit">
    <form  class="formE" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

    <input type="text" id="register_e" name="emri" placeholder = "name..."><br><br>
    <input type="text" id="register_m"name="mbiemri" placeholder = "surname..."><br><br>
    <input type="text" id="register_mo"name="mosha" placeholder = "age..."><br><br>
    <input type="text" id="register_em"name="emaili" placeholder = "email..."><br><br>
    <input type="text" id="register_p"name="passi" placeholder = "password..."><br><br>
    <input type="text" id="register_c"name="confpass" placeholder = "confirmPassword..."><br><br>

    <input type="submit"  id="register_edit"name="registerBtn" value="Register"><br><br>
    </form>
</div>

        <?php include_once '../controller/registerController.php';?>
</body>
</html>