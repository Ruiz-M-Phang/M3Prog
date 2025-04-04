<?php

// header('Content-Type: application/json');

$winkel='{
    "winkel": {
      "producten": [
        {
          "productNaam": "Laptop",
          "details": {
            "prijs": 999.99,
            "voorraad": 50
          }
        },
        {
          "productNaam": "Smartphone",
          "details": {
            "prijs": 699.99,
            "voorraad": 100
          }
        }
      ]
    }
  }
  ';


$winkelObj = json_decode($winkel); // deserialisation = Van code naar text

$jsonString = json_encode($winkelObj); // serialisation = Van text naar code
  
print_r($winkelObj);

echo "<br>";
echo $winkelObj->winkel->producten[1]->details->prijs;


?>