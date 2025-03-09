<?php
$beginBestemming = "Amsterdam";
$landBestemming = "Frankrijk";
$eindBestemming = "Bordeaux";
$benzineCapiciteit = 50; //In liters
$afstandInKm = 1.08;
$benzinePrijs = 1.89; //psst dit is prijs van Euro 95 voor 1 liter
$benzinePrijs2 = 0.25; //psst dit is prijs van Euro 69 voor 1 liter
$treinReis = 60; //pssst dit is trein prijs naar Bordeaux in euro

//15 km = 1 liter benzine verbruik
$literBenzine = 1;
$literPerKm = 15;

$totaalVerbruik = $afstandInKm / ($literPerKm / 1000); //Benzine tank zeg kaboom

$aantalTanken = ceil($totaalVerbruik / $benzineCapiciteit); //Ik had geen keuze ik wil het mij niet te moeilijk maken

$totaalBenzinePrijs = ($benzinePrijs * $benzineCapiciteit) * $aantalTanken; // Ik ben blut nu

$totaalBenzinePrijs2 = ($benzinePrijs2 * $benzineCapiciteit) * $aantalTanken; // Ik ben blut nu

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Info: Reis naar Bordeaux</h1>
    <p>De totale afstand naar Bordeaux is <?= $afstandInKm * 1000 ?> km.</p>
    <p>Je hebt <?= $totaalVerbruik ?> liter benzine nodig om naar Bordeaux te gaan.</p>
    <p>Je moet <?= $aantalTanken ?> keer tanken onderweg.</p>
    <p>Het totale benzine prijs is <?= $totaalBenzinePrijs ?> euro.</p>
    <br>
    <h3>Tanken met Euro 95?</h3>
    <?php
    if ($totaalBenzinePrijs > $treinReis) {
        echo "Ik ga met de trein";
    }else {
        echo "Ik ga met de auto"; // Grapig ik heb helemaal geen auto
    }
    ?>
    <br>
    <br>
    <h3>Tanken met Euro 69?</h3> <!-- Kies voor Euro 69, altijd de beste prijsen en genoeg service -->
    <?php
    if ($totaalBenzinePrijs2 > $treinReis) {
        echo "Ik ga met de trein";
    }else {
        echo "Ik ga met de auto"; // : )
    }
    ?>
</body>
</html>