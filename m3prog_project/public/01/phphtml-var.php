<?php
//hier komt code
$title = "Mijn mooie website";
$datum = date('d-m-Y');
$tijd = date("H:i");
$favorieteGame = "Super metroid (wie weet, hangt van af. Ok het antwoord is ja.)";
$mooisteGetal = 42;
$favorieteShow = "Corpse Party";
$leuksteStad = "Anime stad";


?>
<!doctype html>
<html lang="nl">
    <head>
        <title><?= $title ?></title>
    </head>
    <body>
        <h2>De datum vandaag is: <?= $datum?>, en de tijd is <?= $tijd?> uur.
        
        <p><h2>Mijn favoriete game</h2><?= $favorieteGame;?></p>
        <br>
        <p><h2>Mooiste getal</h2><?= $mooisteGetal;?></p>
        <br>
        <p><h2>Favoriete show</h2><?= $favorieteShow;?></p>
        <br>
        <p><h2>Leukste stad</h2><?= $leuksteStad;?></p>

    </body>
</html>