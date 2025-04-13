<?php

class Artiekelen{
  public $naam;
  public $prijs;
  public $voorraad;
  public $beschrijving;
}

$artiekel = new Artiekelen;
$artiekel->naam = "God of war";
$artiekel->prijs = 29.99;
$artiekel->voorraad = 20;
$artiekel->beschrijving = "Game of the year 2018 somthing very bloody";

$json = '
{
  "naam":"God of war",
  "prijs":29.99,
  "voorraad":20,
  "beschrijving":"Game of the year 2018 somthing very bloody"
}'
;

$jsonObject = json_decode($json); // json object gemaakt
print_r($jsonObject);

$jsonString = json_encode($jsonObject); // json string gemaakt

echo "<br><br> $artiekel->naam";
echo "<br> $artiekel->prijs";
echo "<br> $artiekel->voorraad";
echo "<br> $artiekel->beschrijving";

print_r("<br><br> $jsonString");

?>