<?php

    $servername = "localhost";
    $username = "root";
    $password = "root";

    $conn = mysqli_connect($servername,$username,$password);

    $sql = "CREATE DATABASE dbrhythmdbrhy";
    mysqli_query($conn, $sql);

    if(!$conn)
    {
        die("Sorry we failed to connect");
    }
    else{
        echo "connection was successful";
    }


?>