<?php

//Code die ik kan kopieëren :)
$placeHolderVar = "[string]";

//hier komt de code
$titelNaam = "variabelennaam.php";
$wegWijzing = "Check de php code op Github om de werkende en niet werkende variabelen te zien.";

//code werkt
$auto2 = "auto2";
$_naam = "_naam";
$naw = "naw";
$kleurVanAuto = "kleurVanAuto";

//code werkt niet
// $auto's //door de ' teken en de kleur verandering kan ik het al zien
// $auto/onderdelen //dat kan je in je code zien door de / teken
// $huis&tuin //nu is hetzelfde verhaal maar dan met de & teken
// $22 //... dat zijn straight up integers
// $software-dev //3rde keer, deze keer met de - teken. $250 uit de slotmachine gewonnen. 
// $$auto //je krijgt een waarschuwing. hé, die $$ tekens lijken op de letter S ... Hé wait a minute. 

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titelNaam ?></title>
</head>
<body>
    <p>
        <h1>Variabelen naam test</h1>
        <?php echo $wegWijzing; ?>
    </p>
</body>
</html>