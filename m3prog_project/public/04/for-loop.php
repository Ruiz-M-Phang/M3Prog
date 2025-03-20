<?php

$prijzen = [2.50, 1.50, 6.78, 9.89, 10.25];

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for-loop</title>
</head>
<body>
    <?php
    for ($i=0; $i < sizeof($prijzen); $i++) { 
        echo $i .": ". $prijzen[$i]. "<br>";
    }
    ?>
</body>
</html>