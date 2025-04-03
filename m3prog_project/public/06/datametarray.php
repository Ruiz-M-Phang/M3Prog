<?php

header("Content-Type: application/json");

$mario = ["name"=>"mario","gemiddeldeCijfer"=> 7.5,"klas"=>"w4"];

$wario = ["name"=>"wario","gemiddeldeCijfer"=> 4.5,"klas"=>"w7"];

$bowser = ["name"=>"bowser","gemiddeldeCijfer"=> 1,"klas"=>"w8"];

$toad = ["name"=>"toad","gemiddeldeCijfer"=> 6.66,"klas"=>"w1"];

$datObject = ["studenten"=> [$mario,$wario,$bowser,$toad]];

$jsonString = json_encode($datObject);

echo $jsonString;

?>