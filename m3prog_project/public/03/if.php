<?php
    $eenBoolVariable =false;
    $aantalOpVoorraad = 0;
    $opvoorraad= $aantalOpVoorraad > 0; //Bedoel je dit $aantalOpVoorraad <= 0
    // $opvoorraad= $aantalOpVoorraad == 30;
    // $nietOpvoorraad = true;

    // if($opvoorraad == false)
    if($aantalOpVoorraad > 0){ //Bedoel je dit $aantalOpVoorraad <= 0
        echo "niet op voorraad";
    }
    else{
        echo "Artiekel is op voorraad";
    }

    echo "<br>";
    echo "<br>";

    // $welOpvoorraad= $aantalOpVoorraad > 10; // Boven de tien is if
    // $opvoorraad= 0 < $aantalOpVoorraad; // onder de tien is else if

    // if($welOpvoorraad){
    //     echo "wel op voorraad";
    // }
    // else if($opvoorraad){
    //     echo "niet op voorraad";
    // }

    echo "<br>";
    echo "<br>";

    if(false)  //() komt uit op false
    {
        // dit wordt NIET uitgevoerd
    }
    else
    {
        //nu gaat deze code uitgevoerd worden
    }

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>