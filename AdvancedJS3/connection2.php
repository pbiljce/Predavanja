<?php
    $username = "root";
    $password = "";
    $host = "localhost";
    $database = "userss";

    $connection = mysqli_connect($host,$username,$password,$database);
    if(!$connection){
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
?>