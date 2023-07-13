<?php
require_once('../db/connection.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $email = $_POST['email'];
    $pass1 = $_POST['pass1'];
    $en = md5($pass1);

    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$en'";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1){
        session_start();
        $_SESSION["login"] = "1";
        header('Location:../booked.php');
    }else{
        die("username and password does not match");
    }
  
}