<?php


include_once '../repository/newsRepository.php';
include_once '../models/news.php';

if(isset($_POST['registerBtn'])){
    if(empty($_POST['titulli']) || empty($_POST['teksti']) || empty($_POST['autori']) || empty($_POST['dataL']) || empty($_POST['oraL'])){
        echo "Fill all fields!";
    }
    else{
        $titulli = $_POST['titulli'];
        $teksti = $_POST['teksti'];
        $autori= $_POST['autori'];
        $dataL = $_POST['dataL'];
        $oraL = $_POST['oraL'];


        $news = new News($titulli,$teksti,$autori,$dataL,$oraL);


        $newsRepository = new newsRepository();
        $newsRepository->insertNews($news);
    }
}

















?>