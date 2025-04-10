<?php

$pi = pi();

$raduis = 3;

$area = round($pi * $raduis**2);

$raduis2 = rand(000, 999);

$area2 = round($pi * $raduis2**2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piece of Pi</title>
</head>
<body>
    <?php
    // printing pi as function
    echo pi();

    // printing pi as varible
    echo "<br><p>$pi</p><br>";

    // formula of calculating a circle: A = π r²
    echo "<h2>Archimedes's circle</h2>";
    echo "<p>Archimedes wants to make a circle with a raduis of 3 cm.<br>
     But he doesn't know what the area of his circle is.<br>
      Can you help Archimedes?</p>";
    // printing the calculation of Archimedes's circle 
    echo "<p>round(π * $raduis^2) = $area cm²</p><br>";

    echo "<h2>Archimedes's random circle</h2>";
    echo "<p>Archimedes now knows the area of his circle but there's a problem.<br>
     His fellow mathematicians came with circles of different sizes.<br>
     A fellow mathematician came with a circle of a raduis of $raduis2 mm.<br>
      Can you help Archimedes?</p>";
    // printing the calculation of Archimedes's circle 
    echo "<p>round(π * $raduis2^2) = $area2 mm²</p><br>";
    ?>
</body>
</html>