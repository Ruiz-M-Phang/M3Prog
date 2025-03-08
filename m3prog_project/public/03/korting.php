<?php
    $totaalBesteld = 50.0;
    // $totaalBesteld = 112.0;
    // $totaalBesteld = 304.0;
    // $totaalBesteld = 500.0;
    // $totaalBesteld = 1000.0;
    $verzendkosten = 3.50;
    $korting1 = 0.05;
    $korting2 = 0.075;
    $cadeautje=false;
    $cadeauWaarde=false;

    

    // hier komen je if statements
    if ($totaalBesteld >= 1000){
        $totaal = $totaalBesteld - ($korting2*$totaalBesteld);
    }elseif ($totaalBesteld >= 250) {
        $totaal = $totaalBesteld - ($korting1*$totaalBesteld);
    }elseif ($totaalBesteld >= 100) {
        $totaal = $totaalBesteld;
    }else{
        $totaal = $totaalBesteld + ($verzendkosten);
    }

    echo "Totaal van de bestelde artiekelen $totaalBesteld</br>";
    echo "Totaal van de bestelde artiekelen $totaal</br>";

    // hier moet een if omheen dat doen we later
    if ($totaalBesteld >= 1000){
        $totaal = $totaalBesteld - ($korting2*$totaalBesteld);
        echo "U krijgt ook een cadeautje ter waarde van 40 euro</br>";
    }elseif ($totaalBesteld >= 400){
        $totaal = $totaalBesteld - ($korting1*$totaalBesteld);
        echo "U krijgt ook een cadeautje ter waarde van 10 euro</br>";
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