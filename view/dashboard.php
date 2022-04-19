<?php

session_start();
if(isset($_SESSION['emaili'])){
    echo "<p class=\"welcomeadmin\"> Welcome : ".$_SESSION['emaili']." !</p>";
}

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

<div class="dashboard_flex">
<table class="tabela_e_dashboardit">
    <tr class = "rreshtat_e_dashboardit"> 
        <th class="head_dashboard">Id</th>
        <th class="head_dashboard">Emri</th>
        <th class="head_dashboard">Mbiemri</th>
        <th class="head_dashboard">Mosha</th>
        <th class="head_dashboard">Email</th>
        <th class="head_dashboard">Password</th>
        <th class="head_dashboard">Confirm Password</th>
        <th class="head_dashboard">Edit</th>
        <th class="head_dashboard">Delete</th>
    </tr>


        <?php 

        include_once '../repository/userRepository.php';

        $userRepository = new UserRepository();
        $users = $userRepository->getAllUsers();

        foreach($users as $user){
            echo 
            "
            <tr class = \"rreshtat_e_dashboardit\">
            <td class=\"data_dashboard\"><b>$user[id]</b></td>
            <td class=\"data_dashboard\">$user[emri]</td>
            <td class=\"data_dashboard\">$user[mbiemri]</td>
            <td class=\"data_dashboard\">$user[mosha]</td>
            <td class=\"data_dashboard\">$user[emaili]</td>
            <td class=\"data_dashboard\">$user[passi]</td>
            <td class=\"data_dashboard\">$user[confpass]</td>
            <td class=\"data_dashboard\"><a href='edit.php? emaili=$user[emaili]'>Edit</a></td>
            <td class=\"data_dashboard\"><a href='delete.php?  emaili=$user[emaili]'>Delete</a></td>
           
            
            </tr>
            
            
            ";
        }
    
     if(isset($_SESSION)){
         echo "<a class=linku_logout href='../Login.php'> <input class=logout type=button value=\"Log Out\" name=logout></a>";
         
        }
        ?>

</table>
    </div>
</body>
</html>