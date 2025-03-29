<?php

//The following function(s) are added
//berekenRitKosten($afstand_km, $km_per_liter, $liter_prijs)

include_once "reiskosten.php";

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/reiskostenStyle.css">
    <title>reiskostengebruik</title>
</head>
<body>
    <article>
    <?php

    print("<h2>Autorit naar Berlijn</h2>");
    print("<p>Autorit naar Berlijn (663 km),
     auto verbruikt 1 liter elke 15 km,
      literprijs benzine is € 1.90</p>");
    print("<br>");
    $kosten = number_format(berekenRitKosten(663, 15, 1.90), 2);
    print("<p><em>663</em> km : <em>15</em> km x € <em>1,90</em> = € <em>$kosten</em></p>");
    print("<br>");
    print("<br>");
    print("<h2>Autorit naar Stockholm</h2>");
    print("<p>Autorit naar Stockholm (1438 km),
     auto verbruikt 1 liter elke 20 km,
      literprijs benzine is € 1.46.</p>");
    print("<br>");
    $kosten = number_format(berekenRitKosten(1438, 20, 1.46), 2);
    print("<p><em>1438</em> km : <em>20</em> km x € <em>1.46</em> = € <em>$kosten</em></p>");
    print("<br>");
    print("<br>");
    print("<h2>Autorit naar Kiev</h2>");
    print("<p>Autorit naar Kiev (1991 km),
     auto verbruikt 1 liter elke 18.47 km,
      literprijs benzine is € 2.23.</p>");
    print("<br>");
    $kosten = number_format(berekenRitKosten(1991, 18.47, 2.23), 2);
    print("<p><em>1991</em> km : <em>18.47</em> km x € <em>2.23</em> = € <em>$kosten</em></p>");

    ?>
    </article>
</body>
</html>