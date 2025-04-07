<?php

$trophiesPerGame = [
    "tetris" => "To many tetris blocks",
    "Demon's souls" => 11, // "key" => "value",
    "Mario wonder" => 0, // "key" => "value",
    "Rayman origins" => 9 // "key" => "value"
];

$trophiesPerDS = $trophiesPerGame["Demon's souls"];
$trophiesPerDS2 = $trophiesPerGame["Mario wonder"];
$trophiesPerDS3 = $trophiesPerGame["Rayman origins"];

$tetris = $trophiesPerGame["tetris"];
echo $tetris . "<br>";

print($trophiesPerDS);
print("<br>");
print($trophiesPerDS2);
print("<br>");
print($trophiesPerDS3);


?>