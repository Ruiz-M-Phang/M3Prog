<?php

header('Content-Type: application/json');

$json = '{
  "bioscoop": {
    "films": [
      {
        "titel" : "Demon Slayer: Kimetsu no Yaiba - The Movie: Mugen Train",
          "details" : {
            "regisseur" : "Haruo Sotozaki",
            "jaar" : 2020,
            "genre" : "Anime"
              }
            },
      {
        "titel" : "Demon Slayer -Kimetsu no Yaiba- The Movie: Infinity Castle",
          "details" : {
            "regisseur" : "Haruo Sotozaki",
            "jaar" : 2025,
            "genre" : "Anime"
              }
            },
      {
        "titel" : "Outlanders",
          "details" : {
            "regisseur" : "Katsuhisa Yamada",
            "jaar" : 2006,
            "genre" : "Anime"
          }
        }
      ]
    }
  }
';

// reading json in php
// $jsonRead = json_decode($json);
// $jsonString = json_encode($jsonRead);
// print_r($jsonRead);

// reading json in browser inspector
$jsonString = json_encode($json);
$jsonRead = json_decode($jsonString);
echo $jsonRead;

?>