<?php

$hetWeer = [
    "maandag" => 12,
    "dinsdag" => 5,
    "woensdag" => 7,
    "donderdag" => 13,
    "vrijdag" => 16,
    "zaterdag" => 19,
    "zondag" => 18];

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/array_assocStyle.css">
    <title>Het weer</title>
</head>
<body>
    <table>
    <?php
    // print_r($hetWeer);

    echo "<tr>";
    echo    "<th>dagen</td>";
    echo    "<th>temperatuur</th>";
    echo "</tr>";
    echo "<tr>";
    echo    "<td>&nbsp;</td>";
    echo "</tr>";

    foreach($hetWeer as $dag => $temp) {
    echo "<tr>";
    echo    "<td class=\"dag\"><span class=\"dag\">$dag</span></td>";
    echo    "<td  class=\"temp\"><spanclass=\"temp\">$temp °C</span></td>";
    echo "</tr>";
    echo "<br>";
    }

    ?>
    </table>
    <?php

    // echo "<br><br>";

    // foreach($hetWeer as $dag2 => $temp2) {
    //     echo "<P>Vandaag $dag2 is het $temp2 °C.</P>";
    //     echo "<br>";
    // }

    ?>
</body>
</html>