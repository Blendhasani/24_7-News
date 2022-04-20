<?php



include_once '../repository/newsRepository.php';
$userId = $_GET['id'];

$newsRepository= new newsRepository();
$newsRepository->deleteNews($userId);

header("location:newsDashboard.php");









?>