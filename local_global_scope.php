<?php

    echo "Welcome to scope and local/global vars in php<br>.";

    $a = 98;

    function printValue()
    {
        global $a ;

        $a = 45;
        echo "the value of your variable is $a";
    }

    //changing in the function , means to change to $a inside the function impace to 
    echo $a;
    printValue();



?>