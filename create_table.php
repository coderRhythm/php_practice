<?php


    $servername = "localhost";
    $username = "root";
    $password = "root";
    $database = "practice";


    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn)
    {
        die("Sorry we failed to connect");
    }
    else{
        echo "Connection was successful";
    }

    $sql = "CREATE TABLE `trip`( `sno` int primary key, `name` varchar(12) not null);";

    $result = mysqli_query($conn, $sql);

    if($result)
    {
        echo "the table is created!";
    }
    else {
        echo "the table is not created";
    }






?>