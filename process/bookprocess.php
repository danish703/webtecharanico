<?php
require_once('../db/connection.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $fname = $_POST['fullname'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $from = $_POST['from'];
    $to = $_POST['to'];
    $date = $_POST['date'];
    $contact = $_POST['contact'];
    $class = $_POST['class'];
    $nationality = $_POST['nationality'];



    $query = "INSERT INTO flightbook(fullname,`address`,gender,`from`,`to`,`date`,contact,class,nationality)
    VALUES('$fname','$address','$gender','$from','$to','$date','$contact','$class','$nationality')";

    if(mysqli_query($conn,$query)){
       header('Location:../booked.php');
    }else{
        echo "error occured";
    }


}else{
    die("request can not be processed");
}