<?php

function add($getal1, $getal2)
{
    $som = $getal1 + $getal2;
    print($som);
    print("<br>");
    return $som;
}

function subtract($getal1, $getal2)
{
    $som = $getal1 - $getal2;
    print($som);
    print("<br>");
    return $som;
}

function divide($getal1, $getal2)
{
    $som = $getal1 / $getal2;
    print($som);
    print("<br>");
    return $som;
}

function multiply($getal1, $getal2)
{
    $som = $getal1 * $getal2;
    print($som);
    print("<br>");
    return $som;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    add(7, 15);
    add(100, 100);
    add(4, 9);
    add(33, 33);

    echo "<br>";

    subtract(6, 9);

    echo "<br>";

    divide(25, 5);

    echo "<br>";

    multiply(25, 25);


    ?>
</body>
</html>