<?php

$hoeLangIsDitWoord = "scrabbleWoord";

$woordLengte = strlen($hoeLangIsDitWoord);

// Vraag 1: De type die door de functie strlen wordt geaccepteerd is string

// Vraag 2: Het returnd de lengte van de string in nummers en begint vanaf 1 dan bij 0

// Vraag 3: Het getal is voor php een byte

$langeWoordPuntCom = "https://mywaifulist.moe/popular"; // Niet op de link klikken

$geefWoordLengte = strlen($langeWoordPuntCom)

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
    // Vraag 4: Hier zie je dat ik de functie strlen al 2 keer heb aan geroepen.
    print($woordLengte);

    echo "<br>";

    print($geefWoordLengte);

    ?>
</body>
</html>