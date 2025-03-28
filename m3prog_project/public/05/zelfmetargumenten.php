<?php

function convertCurrency($amount, $fromCurrency, $toCurrency) 
{
    print($amount);
    print("<br>");
    print($fromCurrency);
    print("<br>");
    print($toCurrency);
    print("<br>");
    print("<br>");

    return $amount && $fromCurrency && $toCurrency;
}

function sendEmail($to, $from, $subject, $message) 
{
    print($to);
    print("<br>");
    print($from);
    print("<br>");
    print($subject);
    print("<br>");
    print($message);
    print("<br>");
    print("<br>");

    return $to && $from && $subject && $message;
}

function generateRandomString($length)
{
    print($length);
    print("<br>");
    print("<br>");

    return $length;
}

function calculateArea($length, $width)
{
    print($length * $width);
    print("<br>");
    print("<br>");

    return $length && $width;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zelf met argumenten</title>
</head>
<body>
    <?php

    convertCurrency(69, "php", "java");

    sendEmail("To: W.Dankoswitz@Crunchyroll.com",
     "From: AnimeG33k445@64KidsInBasement.com", 
     "Subject: Anime subscription", 
     "Dear mrs. Dankoswitz, <br><br> Goodday mrs. Dankoswitz, I would
     like to ask you to have a free Crunchyroll subcription for life. <br><br>
     With kind regards, <br><br> AnimeG33k445"
    );

    generateRandomString("15 cm");

    calculateArea(5, 3);

    print("To: W.Dankoswitz@Crunchyroll.com");
    print("<br>");
    print("From: AnimeG33k445@64KidsInBasement.com");
    print("<br>");
    print("Subject: Anime subscription");
    print("<br>");
    print("<br>");
    print("Dear mrs. Dankoswitz, <br><br> Goodday mrs. Dankoswitz, I would
     like to ask you to have a free Crunchyroll subcription for life. <br><br>
     With kind regards, <br><br> AnimeG33k445");
    print("<br>");
    print("<br>");

    print("15 cm");

    print("<br>");
    print("<br>");

    print(5 * 3);



    ?>
</body>
</html>