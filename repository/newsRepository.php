<?php

include_once '../database/databaseConnection.php';

class newsRepository{


private $connection;

function __construct(){
    $conn = new DatabaseConnection();
    $this->connection=$conn->startConnection();
}


function insertNews($news){

    $conn = $this->connection;
    $titulli=$news->getTitulli();
    $teksti=$news->getTeksti();
    $autori=$news->getAutori();
    $dataL=$news->getDataL();
    $oraL=$news->getOraL();
    

    $sql = "INSERT INTO lajmet(titulli,teksti,autori,dataL,oraL) VALUES (?,?,?,?,?)";
    $statement = $conn->prepare($sql);
    $statement->execute([$titulli,$teksti,$autori,$dataL,$oraL]);

    echo "<script>alert('News has been inserted successfully!');</script>";
}






function getAllNews(){
    $conn = $this->connection;
    $sql = "SELECT * FROM lajmet";

    $statement = $conn->query($sql);
    $newss = $statement->fetchAll();
    return $newss;
}


function getNewsById($id){
    $conn = $this->connection;
    $sql = "SELECT * FROM lajmet WHERE id ='$id'";

    $statement = $conn->query($sql);
    $news = $statement->fetch();
    return $news;
}


function updateNews($titulli,$teksti,$autori,$dataL,$oraL,$id){
    $conn = $this->connection;
    $sql = "UPDATE lajmet SET titulli=? , teksti=?,autori=?,dataL=?,oraL=? WHERE id=?";


    $statement = $conn->prepare($sql);
    $statement->execute([$titulli,$teksti,$autori,$dataL,$oraL,$id]);
    
    echo "<script>alert('Update was successful'); </script>";
   

}

function deleteNews($id){
    $conn = $this->connection;

    $sql = "DELETE FROM lajmet WHERE id=?";

    $statement = $conn->prepare($sql);

    $statement->execute([$id]);

    echo "<script>alert('Delete was successful'); </script>";
} 

}


?>