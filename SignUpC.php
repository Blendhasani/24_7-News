<?php
include_once 'sqlFunctions.php';

if(isset($_POST['submiti'])){
  $emri = $_POST['emri'];
  $mbiemri = $_POST['mbiemri'];
  $mosha = $_POST['mosha'];
  $emaili = $_POST['emaili'];
  $passi = $_POST['passi'];
  $confpass = $_POST['confpass'];

  signUp($emri,$mbiemri,$mosha,$emaili,$passi,$confpass);

  
}

?>