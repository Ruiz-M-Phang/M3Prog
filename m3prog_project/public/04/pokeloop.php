<?php

$pokemons = ["Gastly", "Haunter", "Gangar", "Jigglypuff", "Jynx"];

$image = ["https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/092.png", 
"https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/093.png", 
"https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/094.png",
"https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/detail/039.png",
"https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/detail/124.png" ];

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/pokeloop.css">
</head>
<body>
    <?php
    for($i = 0; $i < count($pokemons); $i++) {
        // echo "<h1>$pokemons[$i]</h1>";
    }

    for($i = 0; $i < count($image); $i++) {
        echo "<h1>$pokemons[$i]</h1>";
        echo "<img src=$image[$i]>";
    }

    ?>
</body>
</html>