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