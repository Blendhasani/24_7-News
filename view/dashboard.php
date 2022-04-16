<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<table border="1">
    <tr> 
   ```` <th>Id</th>
        <th>Emri</th>
        <th>Mbiemri</th>
        <th>Mosha</th>
        <th>Emaili</th>
        <th>Passwordi</th>
        <th>Confirm Passwordi</th>
    </tr>


        <?php 

        include_once '../repository/userRepository.php';

        $userRepository = new UserRepository();
        $users = $userRepository->getAllUsers();

        foreach($users as $user){
            echo "
            <tr>
            <td>$user[id]</td>
            <td>$user[emri]</td>
            <td>$user[mbiemri]</td>
            <td>$user[mosha]</td>
            <td>$user[emaili]</td>
            <td>$user[passi]</td>
            <td>$user[confpass]</td>
            
            
            
            </tr>
            
            
            ";
        }

        ?>

</table>
    
</body>
</html>