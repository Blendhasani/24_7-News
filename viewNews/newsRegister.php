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
<p class="edit_user">Register News :</p>
<div class="forma_edit">
    <form  class="formE" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

    <input type="text" id="register_e" name="titulli" placeholder = "titulli..."><br><br>
    <input type="text" id="register_m"name="teksti" placeholder = "teksti..."><br><br>
    <input type="text" id="register_mo"name="autori" placeholder = "autori..."><br><br>
    <input type="text" id="register_em"name="dataL" placeholder = "data..."><br><br>
    <input type="text" id="register_p"name="oraL" placeholder = "ora..."><br><br>
  

    <input type="submit"  id="register_edit"name="registerBtn" value="Register"><br><br>
    </form>
</div>

        <?php include_once '../controller/newsRegisterController.php';?>
</body>
</html>