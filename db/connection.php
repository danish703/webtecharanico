<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "flightbooking";

$conn = mysqli_connect($host,$username,$password,$dbname);

if(!$conn){
    die("connection can not established");
}

?>