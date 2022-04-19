<?php

include_once '../database/databaseConnection.php';

class UserRepository{


private $connection;

function __construct(){
    $conn = new DatabaseConnection();
    $this->connection=$conn->startConnection();
}


function insertUser($user){

    $conn = $this->connection;
    $emri=$user->getEmri();
    $mbiemri=$user->getMbiemri();
    $mosha=$user->getMosha();
    $emaili=$user->getEmaili();
    $passi=$user->getPassi();
    $confpass=$user->getConfpass();

    $sql = "INSERT INTO userat(emri,mbiemri,mosha,emaili,passi,confpass) VALUES (?,?,?,?,?,?)";
    $statement = $conn->prepare($sql);
    $statement->execute([$emri,$mbiemri,$mosha,$emaili,$passi,$confpass]);

    echo "<script>alert('User has been inserted successfully!');</script>";
}






function getAllUsers(){
    $conn = $this->connection;
    $sql = "SELECT * FROM userat";

    $statement = $conn->query($sql);
    $users = $statement->fetchAll();
    return $users;
}


function getUserByEmail($emaili){
    $conn = $this->connection;
    $sql = "SELECT * FROM userat WHERE emaili ='$emaili'";

    $statement = $conn->query($sql);
    $user = $statement->fetch();
    return $user;
}


function updateUser($emri,$mbiemri,$mosha,$emaili,$passi,$confpass){
    $conn = $this->connection;
    $sql = "UPDATE userat SET emri=? , mbiemri=?,mosha=?,passi=?,confpass=? WHERE emaili=?";


    $statement = $conn->prepare($sql);
    $statement->execute([$emri,$mbiemri,$mosha,$emaili,$passi,$confpass]);
    
    echo "<script>alert('Update was successful'); </script>";
   

}

function deleteUser($emaili){
    $conn = $this->connection;

    $sql = "DELETE FROM userat WHERE emaili=?";

    $statement = $conn->prepare($sql);

    $statement->execute([$emaili]);

    echo "<script>alert('delete was successful'); </script>";
} 

}


?>