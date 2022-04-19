<?php

$GLOBALS['dbcon'] = null;
$dbcon;
function connection(){
    global $dbcon;

    $host = 'localhost';
    $dbname = 'signup';
    $username = 'root';
    $password = '';
    // Create connection
    try{
        $dbcon = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
        $dbcon->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION)."</br>";
        $dbcon->setAttribute(PDO::FETCH_BOUND,PDO::FETCH_BOTH);
      }catch(PDOException $pdo){
         die("Deshtoi lidhja me databazen ($dbname):".$pdo->getMessage());
      }
      $GLOBALS['dbcon'] = $dbcon;
}
function signUp($emri,$mbiemri,$mosha,$emaili,$passi,$confpass){
    global $dbcon;
    connection();
    $sql = "INSERT INTO userat(emri,mbiemri,mosha,emaili,passi,confpass) VALUES('$emri','$mbiemri','$mosha','$emaili','$passi','$confpass')";
    $result = $dbcon->query($sql);
    if($result){
        
        header("Location: Login.php");
        return $result;
    }
    
}





?>
