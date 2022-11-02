<?php

if (isset($_POST['registerBtn'])) {
$conn = mysqli_connect('localhost', 'root', '', 'movies_project');

$email = trim($_POST['email']);


   
    $query = "SELECT * FROM users WHERE email = $email ";
    $result = mysqli_query($conn, $query);
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);   
    mysqli_close($conn);
    if ($users) {
        echo 'welcome back <br>';
    } else {
    echo 'the user does not exist in BD <br>';
    }
}