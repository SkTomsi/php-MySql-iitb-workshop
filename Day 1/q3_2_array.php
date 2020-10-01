<?php
    $a=array(array(4,6),array(16,6));
    $b=array(array(16,6),array(14,10));

    echo "Addition of matrix is : <br>";

    for($i=0;$i<2;$i++)
    {
        for($j=0;$j<2;$j++)
        {
            echo $a[$i][$j]+$b[$i][$j]." ";
        }
        echo "<br>";
    }
?>