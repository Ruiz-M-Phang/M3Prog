<?php
    $som1 = 2 + 2;
    $som2 = 5 * 5;
    $som3 = 100 / 10;
    $som4 = 60 - 25;

    $varsom1 = $som1 * $som2;
    $varsom2 = $som4 / $som3;
    $varsom3 = $varsom1 * $som4 / $varsom2 - $som2;
    $varsom4 = $varsom1 * $som4 / ($varsom2 - $som2);

    echo "2 + 2 = {$som1}";
    echo "<br>";
    echo "5 * 5 = {$som2}";
    echo "<br>";
    echo "100 / 10 = {$som3}";
    echo "<br>";
    echo "60 - 25 = {$som4}";
    echo "<br>";
    echo "<br>";

    echo "4 * 25 = {$varsom1}";
    echo "<br>";
    echo "35 / 10 = {$varsom2}";
    echo "<br>";
    echo "100 * 35 / 3.5 - 25 = {$varsom3}";
    echo "<br>";
    echo "100 * 35 / (3.5 - 25) = {$varsom4}";
    echo "<br>";
    echo "<br>";

    //direct met getallen
    $eenPlusEen = 1 + 1;
    $tienMinVijf = 10 - 5;

    //met variabelen
    $leeftijd = 21;
    $dagen_per_jaar = 365;

    $leeftijd_in_dagen = $leeftijd * $dagen_per_jaar;

    //en dan op het scherm:
    echo "Ik ben " . $leeftijd . " jaar " . " en dus al " . $leeftijd_in_dagen . " dagen oud!"; 

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