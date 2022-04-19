<?php


include_once '../repository/userRepository.php';
include_once '../models/user.php';

if(isset($_POST['registerBtn'])){
    if(empty($_POST['emri']) || empty($_POST['mbiemri']) || empty($_POST['mosha']) || empty($_POST['emaili']) || empty($_POST['passi']) || empty($_POST['confpass'])){
        echo "Fill all fields!";
    }
    else{
        $emri = $_POST['emri'];
        $mbiemri = $_POST['mbiemri'];
        $mosha = $_POST['mosha'];
        $emaili = $_POST['emaili'];
        $passi = $_POST['passi'];
        $confpass = $_POST['confpass'];

        $user = new User($emri,$mbiemri,$mosha,$emaili,$passi,$confpass);


        $userRepository = new UserRepository();
        $userRepository->insertUser($user);
    }
}

















?>