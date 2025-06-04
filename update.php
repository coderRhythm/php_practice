<?php

    $servername = "localhost";
    $username = "root";
    $password= "root";
    $database = "pp";


    //connect 
    $conn  = mysqli_connect($servername,$username, $password, $database);

    if(!$conn)
    {
        echo "connection is not successful";
    }
    else{
        echo "connection is successful";
    }


    // now write the update query
    $sql = "update  `p` set `email` = '1032212447@mitwpu.edu.in',  `password` = 12 where `id`=1;";

    $result = mysqli_query($conn,$sql);


    echo "$result";




?>