<?php

    //R = rood, O = oranje, G = groen
    // $stoplichtKleur = "R";
    // $stoplichtKleur2 = "O";
    $stoplichtKleur1 = "G";

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

    if($stoplichtKleur1)//als groen
    {
        echo "<button style='background-color:#FF0000;height:25px;width:25px;'/>";
    }else if($stoplichtKleur2)//als oranje
    {
        echo "<button style='background-color:#ffA500;height:25px;width:25px;'/>";
    }else//als rood
    {
        echo "<button style='background-color:#008000;height:25px;width:25px;'/>";
    }
    ?>
</body>
</html>