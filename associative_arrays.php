<?php

    echo "Welcome to the associative arrays in php";


    // arrays
    $arr = array("this","that","what");
    echo "<br>";
    foreach($arr as $i)
    {
        echo $i." ";
    }

    //Associative arrays
    // key - value pair

    $favCol = array(
        'red' => 'shubham',
        'green'=>'rohan',
    2=>"two");

    echo $favCol[2];

    // using for each loop
    foreach($favCol as $value){
        echo $value."<br>";
    }


?>