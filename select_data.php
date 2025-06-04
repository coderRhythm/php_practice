<?php


    $servername  = "localhost";
    $username  ="root";
    $password = "root";
    $database = "pp";

    //connect 
    $conn = mysqli_connect($servername, $username, $password, $database);


    //verify
    if(!$conn)
    {
        echo "connection was not successful!";
    }
    else{
        echo "connection is successful!";
    }


    // sql query
    $sql = "select * from `p`";
    
    $result = mysqli_query($conn,$sql);


    //find the number of records returned
    $num = mysqli_num_rows($result);

    echo $num;



    // Display the rows returned by the sql query 
    if($row = mysqli_fetch_assoc($result))
    {
        // fetching the row
        // $row = mysqli_fetch_assoc($result);
        // echo $row;
        // echo "<br>";
        // $row = mysqli_fetch_assoc($result);
        // echo var_dump($row);
        // echo "<br>";

        // we can fetch using while loop
        $row = mysqli_fetch_assoc($result);

        echo $row['email']." ".$row['password'];



    }
    






?>