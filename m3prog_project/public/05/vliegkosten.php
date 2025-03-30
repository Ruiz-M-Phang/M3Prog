<?php

//The following function(s) are added
// vliegkostenfunction($km_afstand, $literprijs_kirosine, $aantal_bagage)
// expl. vliegkostenfunction(150,150,3)

include_once "vliegkostenfunctions.php";

$business_prijs = 1.5; // * 1.5

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/vliegkostenStyle.css">
    <title>vliegkosten</title>
</head>
<body>
    <article>
    <?php

    print("<h2>Vliegreis van 3722 km</h2>");
    print("<br>");
    print("<p>Vliegreis van 3722 km, Kerosine prijs €2,05, Bagage 20 kilo, Economy class</p>");
    print("<br>");
    $kosten = number_format(vliegkostenfunction(3722,2.05,20), 2);
    print("<p>3722 km: €$kosten</p>");

    print("<br>");
    print("<br>");

    print("<h2>Vliegreis van 9276 km</h2>");
    print("<br>");
    print("<p>Vliegreis van 9276 km, Kerosine prijs €3,11, Bagage 10 kilo, Economy class</p>");
    print("<br>");
    $kosten = number_format(vliegkostenfunction(9276,3.11,10), 2);
    print("<p>9276 km: €$kosten</p>");

    print("<br>");
    print("<br>");

    print("<h2>Vliegreis van 803 km</h2>");
    print("<br>");
    print("<p>Vliegreis van 803 km, Kerosine prijs €2,83, Geen bagage, Business class</p>");
    print("<br>");
    $kosten = number_format(vliegkostenfunction(803,2.83,0) * $business_prijs, 2);
    print("<p>803 km + business: €$kosten</p>");

    ?>
    </article>
</body>
</html>