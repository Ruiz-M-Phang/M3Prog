<?php

$announcements = [
    "a.html",
    "b.html",
    "c.html"
];

$reviews = [
    ["demon's souls",10],
    ["mario wonder",9.5],
    ["mega man 2",8]
];

array_push($reviews, "Dragon Ball Z", "over ");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    for ($i = 0; $i < count($reviews); $i++) { 

    }

    for ($i = 0; $i < count($announcements); $i++) { 
        $announcement = $announcements[$i]; //pak het huidige element
        include "announcements/$announcement";

        $review = $reviews[$i]; //pak het huidige element

        $title = $review[0];
        $cijfer = $review[1];

        echo "<br><h1>$title</h1>";
        echo "<p>$cijfer</p><br>";  
    }

    do {$a = 9000;
        echo "<br><h1>$reviews[3]</h1><p>$reviews[4] $a</p>";
        } while ($a <= 9000);

        

    ?>
</body>
</html>