<?php

// $theJoke = ["Why are black people afraid of chainsaws?" => "Run nigga nigga nigga"];

// foreach ($theJoke as $question => $joke) {
//     echo "$question <br><br> $joke";
// }

$persoon = ["voornaam" => "Luigi",
            "achternaam" => "Mario",
            "leeftijd" => 19,
            "woonplaats" => "Hiroshima",
            "favoriet eten" => "groene paddenstoel",
            "minst favoriet eten" => "paarse paddenstoel"
        ];



?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/personenStyle.css">
    <title>Personen</title>
</head>
<body>
    <table>
    <?php
    echo "<tr><td><strong class=\"key\">key</strong></td><td class=\"key\"><strong>value</strong></td></tr>";
    echo "<br>";
    echo "<br>";

    foreach ($persoon as $key => $value) {

        echo "<tr><td>$key</td><td>$value</td></tr>";
        echo "<br>";
    }

    ?>
    </table>
</body>
</html>