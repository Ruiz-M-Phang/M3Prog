<?php

$_GET['stad'] = "Amsterdam";
$_GET['temperatuur'] = 23;
$_GET['land'] = "Nederland";

header("HTTP/1.0 404 >: )");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Het merk Oreo is sinds 2012 eigendom van Mondelez International. Volgens Mondelez duurt het twee uur om één Oreo-koekje te maken en te bakken . Het bedrijf heeft fabrieken in 18 landen over de hele wereld die 40 miljard koekjes per jaar produceren. Als je deze koekjes op elkaar stapelt, zouden ze vijf keer de aarde omcirkelen!</title>
</head>
<body>
    <?php

    // http://localhost:88/05/querystrings.php
    print("Stad: ");
    echo $_GET['stad']; // Er komt "Amsterdam" op het scherm
    print("<br>");
    print("Temperatuur: ");
    echo $_GET['temperatuur']; // Er komt "23" op het scherm
    print(" Fahrenheit");
    print("<br>");
    print("Land: ");
    echo $_GET['land']; // Er komt "Nederland" op het scherm

    ?>
</body>
</html>