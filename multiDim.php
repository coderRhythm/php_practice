<?php


    $multiDim = array(array(2,5,7,8),
                array(1,2,3,4),
                array(6,7,8,9)
);

    for($i=0;$i<count($multiDim);$i++)
    {
        for($j=0;$j<count($multiDim[$i]);$j++)
        {
            echo $multiDim[$i][$j]." ";
        }
        echo "<br>";
    }


?>