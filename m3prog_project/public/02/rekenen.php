<?php
    $getal = 149.77518; //Hint: het is Autorelatieve Code
    $afgerond = round($getal);
    echo "Als je $getal afrond dan krijg je: $afgerond";

    echo "<br>";
    echo "<br>";

    $getalVoorbeeld = 11214.489;
    $afgerondVoorbeeld = round($getalVoorbeeld);
    echo "Als je $getalVoorbeeld afrond dan krijg je: $afgerondVoorbeeld";
    // Als je 11214.489 afrond dan krijg je: 11214

    echo "<br>";
    echo "<br>";

    $getal2 = 11.97131; //Hint: het is Autorelatieve Code
    $afgerond2 = floor($getal2); 
    echo "Als je $getal2 afrond dan krijg je: $afgerond2";
    echo "<br><br>";

    $random1 = rand(1, 9);
    $random2 = rand(0, 9);
    $random3 = rand(0, 9);

    $randomUitkomst = ($random1 + $random2) / $random3;

    echo "($random1 + $random2) : $random3 = $randomUitkomst";


?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>