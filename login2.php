<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Login</h1>

    <?php
     $email =  $_POST['email'];

    if (isset($_POST['loginBtn'])) {
        $conn = mysqli_connect('localhost', 'root', '', 'movies_project');
        $query = "SELECT *
        FROM users
        where email = '$email'";
        $result = mysqli_query($conn, $query);
        $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

        

       // check if result from db php
        if($users){
            
            echo 'l utilisateur existe dans la DB ';
            
        } else {
            echo 'il n existe pas!!!';
        }
            
        
        mysqli_close($conn);
    }
        


       // if (!empty($_POST['password'])) {
         
        //    echo 'Password is mandatory<br>';
       // }

        
    

    ?>


    <form method="POST">
        <input type="text" name="email" placeholder="Your email"><br>
        <input type="text" name="password" placeholder="Your password"><br>
        <input type="submit" name="loginBtn" value="Log in">
    </form>
</body>

</html>