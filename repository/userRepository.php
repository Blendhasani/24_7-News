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
    $confpassi=$user->getConfpass();

    $sql = "INSERT INTO userat(emri,mbiemri,mosha,emaili,passi,confpass) VALUES (?,?,?,?,?,?)";
    $statement = $conn->prepare($sql);
    $statement->execute([$emri,$mbiemri,$mosha,$emaili,$passi,$confpassi]);

    echo "<script>alert('User has been inserted successfully!');</script>";
}




function getAllUsers(){
    $conn = $this->connection;
    $sql = "SELECT * FROM userat";

    $statement = $conn->query($sql);
    $users = $statement->fetchAll();
    return $users;
}

}

// $userRepo = new UserRepository;

// $userRepo->insertUser();
?>