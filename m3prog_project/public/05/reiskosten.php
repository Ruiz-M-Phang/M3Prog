<?php

function berekenRitKosten($afstand_km, $km_per_liter, $liter_prijs)
{
    // Hier gaan we de berekening toevoegen
    $kosten_euro = 0;
    
    // Hoeveel liter benzine heb je nodig?
    $aantal_liters = $afstand_km / $km_per_liter;

    // kosten: aantal liter * literprijs
    $kosten_euro = $aantal_liters * $liter_prijs;
    return $kosten_euro;
}

// Stel, je gaat een reis van 500 km maken, in een auto die 1 op 20 rijdt en een liter benzine kost € 2.45
// Dan kun je de function zo aanroepen en de kosten opslaan in een variabele
// $kosten = berekenRitKosten(500, 20, 2.45); 

// Voor een reis van 1200km, auto die 1 op 10 rijdt en een bezine prijs van 1.89
 // $kosten = berekenRitKosten(1200, 10, 1.89);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reiskosten</title>
</head>
<body>
    <?php

    // print($kosten);

    ?>
</body>
</html>