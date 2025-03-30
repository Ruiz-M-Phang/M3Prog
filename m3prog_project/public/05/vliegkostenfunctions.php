<?php

function vliegkostenfunction($km_afstand,
 $literprijs_kirosine,
  $aantal_bagage)
{
    $reis_kosten = $km_afstand * $literprijs_kirosine / 30;
    $totaalprijs = $reis_kosten + $aantal_bagage * 5;

    return $totaalprijs;

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vliegkosten</title>
</head>
<body>
    <?php



    ?>
</body>
</html>