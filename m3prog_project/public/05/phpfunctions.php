<?php

$hoeLangIsDitWoord = "scrabbleWoord";

$woordLengte = strlen($hoeLangIsDitWoord);

// Vraag 1.1: De type die door de functie strlen wordt geaccepteerd is string

// Vraag 1.2: Het returnd de lengte van de string in nummers en begint vanaf 1 dan bij 0

// Vraag 1.3: Het getal is voor php een byte

$langeWoordPuntCom = "https://mywaifulist.moe/popular"; // Niet op de link klikken

$geefWoordLengte = strlen($langeWoordPuntCom);

$tweeMacht2 = pow(2,2);

pow(2,10);

$derdeMacht = pow(3,4);

// https://www.php.net/manual/en/function.strtoupper.php
$naam = "mario";

$naamGroot = strtoupper($naam);

$naamKlein = strtolower($naamGroot);

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php functions</title>
</head>
<body>
    <?php
    // Vraag 1.4: Hier zie je dat ik de functie strlen al 2 keer heb aan geroepen.
    print($woordLengte);

    echo "<br>";

    print($geefWoordLengte);

    echo "<br>";

    print($tweeMacht2);

    echo "<br>";

    print(pow(2,10));

    print("<br>");
    print(pow(3,4)); // Vraag 2.1: We geven het antwoord door met behulp van de print, pow functie en integers tussen de haakjes van pow zetten

    print("<br>");
    print($naamGroot);

    print("<br>");
    print($naamKlein);

    print("<br>");
    print($naam);

    ?>
</body>
</html>