<?php

class Artiekel{
    public $naam;
    public $prijs;
    public $voorraad;

}

$game = new Artiekel();
$game->naam="mario wonder";
$game->prijs=59.99;
$game->voorraad=50;

echo "<br>";
print_r($game);

$jsonString = json_encode($game);
echo "<br><br>$jsonString";

$jsonObject = json_decode($jsonString);
echo "<br><br>";
print_r($jsonObject);

$json = 
'{
  "Artiekel": {
    "game": [
      "naam": "mario wonder",
      "prijs": 59.99,
      "voorraad": 50
    ]
  }
}'
;

$jsonString = json_encode($json);

$jsonObject = json_decode($jsonString);
echo "<br><br>";
print_r($jsonObject);

?>