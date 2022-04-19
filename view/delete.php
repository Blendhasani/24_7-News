<?php



include_once '../repository/userRepository.php';
$userEmail = $_GET['emaili'];

$userRepository = new UserRepository();
$userRepository->deleteUser($userEmail);

header("location:dashboard.php");









?>