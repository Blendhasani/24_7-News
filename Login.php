<?php

session_start(); 

$conn = new mysqli('localhost', 'root', '', 'signup');
if(!$conn){
    die(mysqli_error($conn));
}

if (isset($_POST['emaili']) && isset($_POST['passi'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $emaili = validate($_POST['emaili']);

    $passi = validate($_POST['passi']);
    $type=$_POST['type'];

    $sql = "SELECT * FROM admins WHERE emaili='$emaili' AND passi='$passi'";
    $result = mysqli_query($conn, $sql);
   
    if (mysqli_num_rows($result) === 1) {

        $row = mysqli_fetch_assoc($result);
       
        if ($row['emaili'] === $emaili && $row['passi'] === $passi && $row['type']=='Admin') {

            $_SESSION['emaili'] = $row['emaili'];

            $_SESSION['passi'] = $row['passi'];

            $_SESSION['id'] = $row['id'];
            
            header("Location: ./view");
          
            
            exit();

        }
  
        if ($row['emaili'] === $emaili && $row['passi'] === $passi && $row['type']==='User') {

            $_SESSION['emaili'] = $row['emaili'];

            $_SESSION['passi'] = $row['passi'];

            $_SESSION['id'] = $row['id'];
            
            header("Location: ./aboutUs.php");
            exit();

        }
    }

    else{
        header("Location: Login.php?msg1=Email or password is incorrect");
        exit();
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Login</title>
</head>
<body>



    <header id="header_9">
        <div class="header_kryesor">
              <div class="divi_logos"> 
                <a href="Home.html"> <img src="images/logo.png" class="logoja" alt="logoja e 24/7 news"></a>
              </div>
            <div class="faqet">
                <a href="Home.html" class="faqet_vecante">Home</a>
                <a href="Coronavirus.html"  class="faqet_vecante">Coronavirus</a>
                <a href="Sport.html"  class="faqet_vecante">Sport</a>
                <a href="Tech.html"  class="faqet_vecante">Tech</a>
                <a href="Health.html"  class="faqet_vecante">Health</a>
                <a href="Science.html"  class="faqet_vecante">Science</a>
                <a href="AboutUs.php" class="faqet_vecante">About Us</a>
                <a href="SignUp.html"  class="faqet_vecante"><img src="images/login.png" class="logini" alt="login forma"></a>
            </div>
        </div>
    </header>
    <div class="account">
    <h2>User Login</h2>
    </div>
    <div class="siperfaqja_login">
        <div class="forma">

                <form method="POST">
                  <table class="tipi">
                    <tr>
                      <td><select name="type" id="tipi" >
                        <option value="-1" class="tipi_in">Select user type:</option>
                        <option value="Admin" class="tipi_in">Admin</option>
                        <option value="User" class="tipi_in">User</option>
                      </select></td>
                    </tr>
                  </table>
                  Email : <input id="email" type="email"  class="borderat_input" name="emaili"><br>
                 <label for="email" id="emailMsg"class="labels"></label><br>
                 Password : <input id="password" type="password" class="borderat_input" name="passi"><br>
                 <label for="password" id="pwmsg" class="labels"></label><br>
                 <?php if (isset($_GET['msg1'])) { ?>
                            <p style="color: rgb(255, 0, 0, 0.8);"><?php echo $_GET['msg1']; ?></p>
                        <?php } ?>
                        <br><br>
                    <input type="submit" name="submit" value="Login" id="submiti"><br>
                </form>
        </div>
    </div>
    
    <div class="teksti_per_login">

        <p class="fonti_login">You don't have an account ? <a href="SignUp.html">Sign Up</a></p>
  
      </div>
  <script src="ValidimiLogin.js"></script>
    <footer>
        <div class="footer">
             <div class="teksti_footerit">
               <p style="margin-bottom: 20px;">
                 This portal is maintained by 24/7 News.
                 <br><br>
                 The materials and information on this portal may not be copied, printed or used in any other form for profit.
               </p>
     
             </div>
                  
             <div class="logot_e_footerit">
                 
                       <a href="https://www.facebook.com/" target="_blank"><img src="images/facebook.png" class="fotot_footer" alt="fb"></a>
                       <a href="https://www.instagram.com/" target="_blank"><img src="images/instagram.png" class="fotot_footer" alt="insta"></a>
                       <a href="https://www.twitter.com/" target="_blank"><img src="images/twitter.png" class="fotot_footer" alt="tw"></a>
                       
             </div>
        </div>
       </footer>
    
</body>
</html>