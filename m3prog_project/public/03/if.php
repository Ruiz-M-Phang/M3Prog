<?php
    $eenBoolVariable =false;
    $aantalOpVoorraad = 5;
    $welOpvoorraad= $aantalOpVoorraad > 10; // Boven de tien is if
    // $opvoorraad= $aantalOpVoorraad == 30;
    $opvoorraad= 0 < $aantalOpVoorraad; // onder de tien is else if
    // $nietOpvoorraad = true;

    if($welOpvoorraad){
        echo "wel op voorraad";
    }
    else if($opvoorraad){
        echo "niet op voorraad";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>