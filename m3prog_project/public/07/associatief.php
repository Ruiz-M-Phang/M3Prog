<?php

$verbruik = [
    "Nintendo Switch - OLED-Model[HEG-001]" => 21, // kwh per jaar
    "Computer en laptop" => 240, // kwh per jaar
    "magnetron" => 10.4, // kwh per jaar
    "LED verlichting" => 3500, // kwh per jaar
    "televisie" => 365]; // kwh per jaar

$totaal = 0;

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/verbruikStyle.css">
    <title>Verbruik</title>
</head>
<body>
    <?php

    echo "<ul>";
     foreach($verbruik as $apparaat => $kwh) {
        echo "<li><strong>$apparaat</strong> verbruikt $kwh kwh per jaar.</li>";
     }
     echo "</ul>";
     echo "<br><br>";
     foreach($verbruik as $apparaat => $kwh) {
        $totaal = $verbruik["Nintendo Switch - OLED-Model[HEG-001]"] + $verbruik["Computer en laptop"] + $verbruik["magnetron"] + $verbruik["LED verlichting"] + $verbruik["televisie"];
     }
     echo "<div><h2>Totaal verbruikt</h2><br><p>$totaal kwh per jaar</p></div>";
    ?>
</body>
</html>