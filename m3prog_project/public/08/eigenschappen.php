<?php

class LunchItem {
    public $naam;
    public $prijs;
    public $beschijving;
}

$broodjeBal = new LunchItem();
$broodjeBal->naam = "broodje bal";
$broodjeBal->prijs = 4.50;
$broodjeBal->beschijving = "lekker broodje met een gehakt bal";

echo "$broodjeBal->naam<br>";
echo "$broodjeBal->prijs euro<br>";
echo "$broodjeBal->beschijving<br><br>";

$broodjeFrikandel = new LunchItem();
$broodjeFrikandel->naam = "broodje frikandel";
$broodjeFrikandel->prijs = 3.50;
$broodjeFrikandel->beschijving = "lekker broodje met frikandel";

echo "$broodjeFrikandel->naam<br>";
echo "$broodjeFrikandel->prijs euro<br>";
echo "$broodjeFrikandel->beschijving<br><br>";

$json =
'[
  {
    "naam": "broodje bal",
    "prijs": 4.50,
    "beschijving": "lekker broodje met een gehakt bal"
    },
    {
    "naam": "broodje frikandel",
    "prijs": 3.50,
    "beschijving": "lekker broodje met frikandel"
  }
]'
;

$jsonString = json_encode($json);

$jsonObject = json_decode($jsonString);
print_r($jsonObject);

$lunchItem = [$broodjeBal, $broodjeFrikandel];

echo "<br><br>";

foreach($lunchItem as $item) {
  echo "<h1>$item->naam</h1>";
  echo "<br>";
  echo $item->prijs;
  echo "<br>";
  echo $item->beschijving;
  echo "<br>";
  echo "<br>";
}

?>