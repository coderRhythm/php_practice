<?php

    echo "Welcome to the stage where  we are ready to get connected to a database";

    // ways to connect to a mysql database
    // 1. MYSQLi extension
    // 2. PDO


    $servername = "localhost";
    $username = "root";
    $password = "root";

    $conn = mysqli_connect($servername,$username, $password);

    
    // die if connection was not successful

    if(!$conn)
    {
        die("sorry failed to connect");
    }
    else{
        echo "connection successful";
    }



?>