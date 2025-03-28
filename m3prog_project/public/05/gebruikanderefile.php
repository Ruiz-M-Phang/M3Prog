<?php

//The following math functions are added
// add($getal1, $getal2) 1+1=2
// subtract($getal1, $getal2) 2-1=1
// divide($getal1, $getal2) 15 / 5 = 3
// multiply($getal1, $getal2) 5 * 10 = 50
// macht2($getal) 5^2 = 25

include_once "returncalc.php";

include_once "macht2.php";

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

    print("<br>");

    add(60, 40);
    subtract(100, 10);
    divide(4, 2);
    multiply(6, 6);

    print("<br>");

    macht2(2);
    macht2(16);
    macht2(100);

    ?>
</body>
</html>