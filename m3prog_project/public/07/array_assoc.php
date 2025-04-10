<?php

$hetWeer = [
    "ma" => 12,
    "di" => 5,
    "wo" => 7,
    "do" => 13,
    "vr" => 16,
    "za" => 19,
    "zo" => 18];

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/array_assocStyle.css">
    <title>array assoc</title>
</head>
<body>
    <table>
    <?php
    print_r($hetWeer);

    echo "<tr>";
    echo    "<th>dag</td>";
    echo    "<th>temp</th>";
    echo "</tr>";
    echo "<tr>";
    echo    "<td>&nbsp;</td>";
    echo "</tr>";

    foreach($hetWeer as $dag => $temp) {
    echo "<tr>";
    echo    "<td class=\"dag\"><span class=\"dag\">$dag</span></td>";
    echo    "<td  class=\"temp\"><spanclass=\"temp\">$temp</span></td>";
    echo "</tr>";
    echo "<br>";
    }

    ?>
    </table>
</body>
</html>