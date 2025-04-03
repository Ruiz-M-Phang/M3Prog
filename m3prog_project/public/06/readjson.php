<?php

// header('Content-Type: application/json');

$steden = [
    "Amsterdam",
    "Rotterdam",
    "Utrecht"
];

$jsonString = json_encode($steden);

$stedenRead = json_decode($jsonString);

print_r($stedenRead);

print("<br>");
print("<br>");

$json = '{
    "studenten": [
      {
        "name": "mario",
        "gemiddeldCijfer": 7.5
      },
      {
        "name": "wario",
        "gemiddeldCijfer": 4.5
      }
    ]
  }';

$dataObject = json_decode($json);

print_r($dataObject);

echo "<br>";
echo $dataObject->studenten[0]->name;
echo "<br>";
echo $dataObject->studenten[1]->gemiddeldCijfer;

?>