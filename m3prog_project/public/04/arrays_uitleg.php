<?php

// Lege array maken (langere manier)
$data = array();

// Lege array maken (kortere manier)
$data = [];

// Langere manier, met gegevens
 $dagen = array("maandag", "dinsdag", "woensdag", "donderdag", "vrijdag", "zaterdag", "zondag");

// Verkorte manier, met gegevens
$dagen = ["maandag", "dinsdag", "woensdag", "donderdag", "vrijdag", "zaterdag", "zondag"];

$nummers = [1,2,3];

array_push($nummers, 4, 5, 6, 69, 666);

print_r($nummers);

echo "<br>";
echo $nummers[1];
echo "<br>";
echo $nummers[0];
echo "<br>";
echo $nummers[4];
echo "<br>";
echo $nummers[7];
echo "<br>";
echo $dagen[4];
echo "<br>";
echo $dagen[2];
echo "<br>";
echo $dagen[6];
echo "<br>";
echo $dagen[1];