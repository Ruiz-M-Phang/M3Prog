<?php

$games = ["Fate/Grand Order",
 "Genshin Impact",
  "Azur Lane",
   "Zenless Zone Zero",
    "Honkai Starrail"];

    // Print de array in tekst formaat
    print_r($games);

    // Geeft wat extra info over het soort data dat er in zit
    var_dump($games); 

    echo "<br>";
    echo "<br>";
    echo $games[2];
    echo "<br>";
    echo $games[4];
    echo "<br>";
    // echo $namen;
    echo count($games)."<br>";
    echo "<br>";
    echo "<br>";

    // Lange manier
array_push($games, "Goddess Connect");

// Verkorte manier 
$games[] = "Tower of Fantasy";

//De array $dagen wordt bevat nu een extra element
echo count($games); // 7

    echo "<br>";
    echo "<br>";

echo implode(' >> ', $games);

    echo "<br>";
    echo "<br>";

// Sorteer op alfabet
sort($games);
print_r($games);

    echo "<br>";
    echo "<br>";

echo implode('<br>', $games);