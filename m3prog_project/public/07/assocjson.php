<?php

$trophiesPerGame = [
    "tetris" => "To many tetris blocks",
    "Demon's souls" => 11, // "key" => "value",
    "Mario wonder" => 0, // "key" => "value",
    "Rayman origins" => 9 // "key" => "value"
];

$persoon = ["voornaam" => "Luigi",
            "achternaam" => "Mario",
            "leeftijd" => 19,
            "woonplaats" => "Hiroshima",
            "favoriet eten" => "groene paddenstoel",
            "minst favoriet eten" => "paarse paddenstoel"
        ];

$hetWeer = [
    "maandag" => 12,
    "dinsdag" => 5,
    "woensdag" => 7,
    "donderdag" => 13,
    "vrijdag" => 16,
    "zaterdag" => 19,
    "zondag" => 18];

$verbruik = [
    "Nintendo Switch - OLED-Model[HEG-001]" => 21, // kwh per jaar
    "Computer en laptop" => 240, // kwh per jaar
    "magnetron" => 10.4, // kwh per jaar
    "LED verlichting" => 3500, // kwh per jaar
    "televisie" => 365]; // kwh per jaar

header("Content-Type: application/json");

$jsonArray = [
    "Trophies Per Game" => $trophiesPerGame, 
    "Persoon" => $persoon, 
    "Het Weer" => $hetWeer, 
    "Verbruik" => $verbruik];

$json  = json_encode($jsonArray);
echo $json;

?>
