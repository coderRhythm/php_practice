<?php

    echo "Welcome to the world of foreach loops <br>";


    $arr = array("banana","apple","harpic","bread");

    for($i=0;$i<count($arr);$i++)
    {
        echo $arr[$i];
        echo "<br>";
    }

    // better approach
    foreach($arr as $i){
        echo $i;
    }

    // $name = "rhythm";

    // echo "$name";  this is print the name (even though in bracket)

?>