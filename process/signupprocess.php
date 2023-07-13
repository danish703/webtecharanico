<?php
require_once('../db/connection.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $email = $_POST['email'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    if($pass1==$pass2){
        if(strlen($pass1)>=8){
            $en = md5($pass1);
            $query = "INSERT INTO users(email,password)VALUES('$email','$en')";
            if(mysqli_query($conn,$query)){
                header("Location:../login.php?msg=signup success");
            }else{
                echo "error aayo";
            }
        }else{
            die("password must be at least of 8 character");
        }

    }else{
        die("password and password confirmation does not match");
    }
}