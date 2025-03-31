<?php

$_GET['leeftijd'] = 17;
$_GET['opleiding'] = "SD ";

// antwoord.php?leeftijd=17&opleiding=SD
echo $_GET['leeftijd'];
echo $_GET['opleiding'];

if(isset($_GET['leeftijd']) && isset($_GET['opleiding']))
{

}

// Tip: Gebruik `print_r($_GET);` om te kijken wat er
//  in de `$_GET` array variabele zit.
?>