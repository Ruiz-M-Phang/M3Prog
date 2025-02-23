<?php

//Code die ik kan kopieëren :)
$placeHolderVar = "[string]";

//hier komt de code
$titel = "Status.php";
$webpaginaStatus = "offline";
$webpaginaStatus1 = "available";
$webpaginaStatus2 = "busy";
$webpaginaStatus3 = "do not disturb";

//Prijs
$prijsText = "prijs";
$prijs0 = 20.50;
$prijs1 = 21.50;
$prijs2 = 30.50;
$prijs3 = 120.50;
$prijs4 = 88.99;
$prijs5 = "1.40";


?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titel ?></title>
</head>
<body>
    <p>
        <?= $webpaginaStatus ?>
        <br>
        <?= $webpaginaStatus1 ?>
        <br>
        <?= $webpaginaStatus2 ?>
        <br>
        <?= $webpaginaStatus3 ?>
        <br>
        <?= $webpaginaStatus ?>
        <br><br>
        <?= $prijsText ?>
        <br>
        <?= $prijs0 ?>
        <br>
        <?= $prijs1 ?>
        <br>
        <?= $prijs2 ?>
        <br>
        <?= $prijs3 ?>
        <br>
        <?= $prijs4 ?>
        <br>
        <?= $prijs5 ?>

    </p>
    
</body>
</html>