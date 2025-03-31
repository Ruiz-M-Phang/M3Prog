<?php

$voorspelling = [
    "ma" => 20,
    "di" => 21,
    "wo" => 29,
    "do" => 19,
    "vr" => 24,
    "za" => 22,
    "zo" => 23
];

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    if(isset($_GET['ma']))
    {
        // hetweer.php?dag=ma
        $_GET['ma'];
        print("De voorspelling voor maandag is {$voorspelling["ma"]} graden.");
        print("<br>");
        $fahrenheit = $voorspelling["ma"] * 9 / 5;
        print("{$voorspelling["ma"]} graden Celsius = $fahrenheit graden fahrenheit.");
        print("<br>");
        print("<img src=\"icons/cloud.png\" alt=\"cloud.png\">");
    }

    if(isset($_GET['di']))
    {
        // hetweer.php?dag=di
        $_GET['di'];
        print("De voorspelling voor dinsdag is {$voorspelling["di"]} graden.");
        print("<br>");
        $fahrenheit = $voorspelling["di"] * 9 / 5;
        print("{$voorspelling["di"]} graden Celsius = $fahrenheit graden fahrenheit.");
        print("<br>");
        echo ("<img src=\"icons/rain.png\" alt=\"das rain ist sehr dins.png\">");
    }

    if(isset($_GET['wo']))
    {
        // hetweer.php?dag=wo
        $_GET['wo'];
        print("De voorspelling voor woensdag is {$voorspelling["wo"]} graden.");
        print("<br>");
        $fahrenheit = $voorspelling["wo"] * 9 / 5;
        print("{$voorspelling["wo"]} graden Celsius = $fahrenheit graden fahrenheit.");
        print("<br>");
        echo ("<img src=\"icons/sun.png\" alt=\"sun.png\">");
    }
    
    if(isset($_GET['do']))
    {
        // hetweer.php?dag=do
        $_GET['do'];
        print("De voorspelling voor donderdag is {$voorspelling["do"]} graden.");
        print("<br>");
        $fahrenheit = $voorspelling["do"] * 9 / 5;
        print("{$voorspelling["do"]} graden Celsius = $fahrenheit graden fahrenheit.");
        print("<br>");
        print("<img src=\"icons/thunder.png\" alt=\"thunderday\">");
    }

    if(isset($_GET['vr']))
    {
        // hetweer.php?dag=vr
        $_GET['vr'];
        print("De voorspelling voor vrijdag is {$voorspelling["vr"]} graden.");
        print("<br>");
        $fahrenheit = $voorspelling["vr"] * 9 / 5;
        print("{$voorspelling["vr"]} graden Celsius = $fahrenheit graden fahrenheit.");
        print("<br>");
        print("<img src=\"icons/cloud.png\" alt=\"cloud.png\">");
    }

    if(isset($_GET['za']))
    {
        // hetweer.php?dag=za
        $_GET['za'];
        print("De voorspelling voor zaterdag is {$voorspelling["za"]} graden.");
        print("<br>");
        $fahrenheit = $voorspelling["za"] * 9 / 5;
        print("{$voorspelling["za"]} graden Celsius = $fahrenheit graden fahrenheit.");
        print("<br>");
        print("<img src=\"icons/cloud.png\" alt=\"Snow on a hot day >: )\">");
    }

    if(isset($_GET['zo']))
    {
        // hetweer.php?dag=zo
        $_GET['zo'];
        print("De voorspelling voor zondag is {$voorspelling["zo"]} graden.");
        print("<br>");
        $fahrenheit = $voorspelling["zo"] * 9 / 5;
        print("{$voorspelling["zo"]} graden Celsius = $fahrenheit graden fahrenheit.");
        print("<br>");
        print("<img src=\"icons/sun.png\" alt=\"sun.png\">");
    }

    ?>
</body>
</html>