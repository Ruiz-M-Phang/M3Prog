<?php

    $a = 1 * 2;

    $space = " ";

    do {
        echo $a;
        echo $space;
        $a++;
    } while ($a <= 10);

    echo "<br>";
    echo "<br>";

    for($i = 0; $i <= 10; $i++) {
        $loopWeGo = pow($i,5);
        
        echo $loopWeGo;
        echo " ";
    }

    echo "<br>";
    echo "<br>";

    for($i = 0; $i <= 10; $i++) {
        $loopWeGo = $i;
        
        echo $loopWeGo;
        echo " ";
    }

    echo "<br>";
    echo "<br>";

    for($i = 0; $i < 10; $i++) {
        $loopWeGo = $i;
        
        echo $loopWeGo;
        echo " ";
    }

    echo "<br>";
    echo "<br>";

    for($i = 0; $i <= 10; $i++) {
        for($i = 0; $i <= 19; $i++) {
        $loopWeGo = $i;
        
        echo $loopWeGo;
        echo " ";
        }
        $loopWeGo = $i;
        
        echo $loopWeGo;
        echo " ";

    }

    // if($uitkeren==false )
    // {
    //     //doe
    // }

    echo "<br>";
    echo "<br>";

    $retVal = (1<2 ) ? "schaap" : "kip" ;

    echo $retVal;


        // for($i = 5; $i > sizeof($integer); $i++) {
    //     $loopWeGo = $integer[$i];
    //     echo $loopWeGo;
    // }
?>