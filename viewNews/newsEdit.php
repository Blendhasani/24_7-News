
<?php


include_once '../repository/newsRepository.php';
   

$userId = $_GET['id'];

    $newsRepository = new newsRepository();
    $news=$newsRepository->getNewsById($userId);




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


<p class="edit_user">Edit News :</p>
<div class="forma_edit">
<form action="" method="post" class="formE">

<input type="text" id="edit_em" name="id" placeholder = "id..." value="<?= $news['id'] ?>" readonly><br><br>
<input type="text" id="edit_e" name="titulli" placeholder = "titulli..." value="<?= $news['titulli'] ?>"><br><br>
<input type="text" id="edit_m" name="teksti" placeholder = "teksti..." value="<?= $news['teksti'] ?>"><br><br>
<input type="text" id="edit_a" name="autori" placeholder = "autori..." value="<?= $news['autori'] ?>"><br><br>
<input type="text" id="edit_c" name="dataL" placeholder = "data..."value="<?= $news['dataL'] ?>"><br><br>
<input type="text" id="edit_p" name="oraL" placeholder = "ora..." value="<?= $news['oraL'] ?>"><br><br>

<input type="submit" id="submit_edit"name="editBtn" value="Save"><br><br>
</form>
</div>
</body>
</html>



<?php

if(isset($_POST['editBtn'])){
 $id = $news['id'];

$titulli = $_POST['titulli'];
$teksti = $_POST['teksti'];
$autori = $_POST['autori'];
$dataL= $_POST['dataL'];
$oraL = $_POST['oraL'];

$newsRepository->updateNews($titulli,$teksti,$autori,$dataL,$oraL,$id);


}




?>