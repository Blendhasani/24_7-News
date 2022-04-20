<?php

session_start();
if(isset($_SESSION['emaili'])){
    // echo "<p class=\"welcomeadmin\"> Welcome : ".$_SESSION['emaili']." !</p>";
    echo "
    <div id=divi_butonave>
    <p  class=\"welcomeadmin\"> Welcome : ".$_SESSION['emaili']." !</p>
  
    <ul class=butonat>
   
    <li><a class=linku_logout href='../Login.php'> <input class=logout type=button value=\"Log Out\" name=logout></a></li>
    <li><a class=linku_logout href='newsRegister.php' > <input id = registri class=logout type=button value=\"Register\" name=logout></a></li>
    </li>
    
    </div>
    ";
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
        <th class="head_dashboard">Titulli</th>
        <th class="head_dashboard">Teksti</th>
        <th class="head_dashboard">Autori</th>
        <th class="head_dashboard">Data</th>
        <th class="head_dashboard">Ora</th>
        <th class="head_dashboard">Edit</th>
        <th class="head_dashboard">Delete</th>
    </tr>


        <?php 

        include_once '../repository/newsRepository.php';

        $newsRepository = new newsRepository();
        $newss = $newsRepository->getAllNews();

        foreach($newss as $news){
            echo 
            "
            <tr class = \"rreshtat_e_dashboardit\">
            <td class=\"data_dashboard\"><b>$news[id]</b></td>
            <td class=\"data_dashboard\">$news[titulli]</td>
            <td class=\"data_dashboard\">$news[teksti]</td>
            <td class=\"data_dashboard\">$news[autori]</td>
            <td class=\"data_dashboard\">$news[dataL]</td>
            <td class=\"data_dashboard\">$news[oraL]</td>
            
            <td class=\"data_dashboard\"><a href='newsEdit.php? id=$news[id]'>Edit</a></td>
            <td class=\"data_dashboard\"><a href='deleteNews.php?  id=$news[id]'>Delete</a></td>
           
            
            </tr>
            
            
            ";
        }
    
  
        ?>

</table>
    </div>
</body>
</html>