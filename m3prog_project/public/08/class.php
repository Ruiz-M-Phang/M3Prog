<?php

$artiekel = [
    "naam"=>    "hello world badge",
    "prijs"=> 5.99,
    "voorraad"=>200 
];

$json = json_encode($artiekel);
echo "$json<br><br>";

$object = json_decode($json); // code naar text

print_r($object);

?>