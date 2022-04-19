
<?php


include_once '../repository/userRepository.php';
   

$userEmail = $_GET['emaili'];

    $userRepository = new UserRepository();
    $user=$userRepository->getUserByEmail($userEmail);




?>



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


<p class="edit_user">Edit User :</p>
<div class="forma_edit">
<form action="" method="post" class="formE">


<input type="text" id="edit_e" name="emri" placeholder = "name..." value="<?= $user['emri'] ?>"><br><br>
<input type="text" id="edit_m" name="mbiemri" placeholder = "surname..." value="<?= $user['mbiemri'] ?>"><br><br>
<input type="text" id="edit_a" name="mosha" placeholder = "age..." value="<?= $user['mosha'] ?>"><br><br>
<input type="text" id="edit_em" name="emaili" placeholder = "email..." value="<?= $user['emaili'] ?>" readonly><br><br>
<input type="text" id="edit_p" name="passi" placeholder = "password..." value="<?= $user['passi'] ?>"><br><br>
<input type="text" id="edit_c" name="confpass" placeholder = "confirmPassword..."value="<?= $user['confpass'] ?>"><br><br>

<input type="submit" id="submit_edit"name="editBtn" value="Save"><br><br>
</form>
</div>
</body>
</html>



<?php

if(isset($_POST['editBtn'])){
 $emaili = $user['emaili'];

$emri = $_POST['emri'];
$mbiemri = $_POST['mbiemri'];
$mosha = $_POST['mosha'];
$passi= $_POST['passi'];
$confpass = $_POST['confpass'];

$userRepository->updateUser($emri,$mbiemri,$mosha,$passi,$confpass,$emaili);
header("Location:dashboard.php");

}




?>