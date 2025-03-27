<?php

$dezeGaatMee = "deze waarde wordt meegenomen";

// Vraag 1: Te weinig argumenten. De variable heeft geen data.
function mijnPrint($printText)
{
    print($printText);
    print("<br>");

    return 0;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nagemaakt</title>
</head>
<body>
    <?php

    mijnPrint("regel 1");
    mijnPrint("regel 2");
    mijnPrint("regel 3");
    mijnPrint("Vraag 1: Te weinig argumenten. De variable heeft geen data.");
    mijnPrint($dezeGaatMee);

    ?>
</body>
</html>