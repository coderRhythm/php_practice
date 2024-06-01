
<h1>Using for loop:</h1>
<?php

    
    echo "<br>";
    for($i=0;$i<5;$i++)
    {
        echo "hello";
        echo "<br>";
    }

    
?>


<!-- while loop -->
<h1>Using while Loop</h1>
<?php

    $i=0;

    while($i<5 && $i<4)
    {
        echo $i+1;
        echo "<br>";
        $i++;
    }

?>


<!-- do-while Loop -->
<h1>Do--while lOOp</h1>

<?php

    $i=0;

    do{
        echo $i;
        $i++;
    }while($i<5)

?>

