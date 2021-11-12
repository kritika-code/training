<?php
    $host = "localhost";
    $user = "kritika";
    $pwd = "password";
    $dbname = "student";
    $conn = mysqli_connect($host,$user,$pwd,$dbname);
    if(!$conn){
        die("connection failed: ".mysqli_connect_error);
    }
?>