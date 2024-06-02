<?php

    echo "Welcome to the php tutorial on functions";

    function processMarks($marksArr)
    {
        $sum = 0;
        foreach($marksArr as $i)
         {
            $sum += $i;
        }

        return $sum;
    }


    $rohanDas = [34,98,45,12,98,93];

    $sumMarks = processMarks($rohanDas);

    echo $sumMarks;





?>