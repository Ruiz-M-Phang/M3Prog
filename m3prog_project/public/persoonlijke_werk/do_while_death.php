<?php

$deathMessage = "ENJOY KILLING YOUR BROWSER!";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browser crash</title>
</head>
<body>
    <?php

do {$a = 1;
    echo "<br><h1 class=h1color>$deathMessage</h1>";
    } while ($a <= 9000);

    ?>
</body>
<style>
    .h1color {
        color: red;
    }
</style>
</html>