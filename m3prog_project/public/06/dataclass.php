<?php

header('Content-Type: application/json');

class student {
    public $name;
    public $gemiddeldeCijfer;
    public $klas;
}

class dataObject {
    public $studenten;
}

$mario = new student();
$mario->name="mario";
$mario->gemiddeldeCijfer=8;
$mario->klas="w7";

$wario = new student();
$wario->name="wario";
$wario->gemiddeldeCijfer=4.5;
$wario->klas="w4";

$bowser = new student();
$bowser->name="bowser";
$bowser->gemiddeldeCijfer=2.5;
$bowser->klas="w8";

$peach = new student();
$peach->name="peach";
$peach->gemiddeldeCijfer=7.5;
$peach->klas="w1";

$dataObject = new dataObject();
$dataObject->studenten = [$mario,$wario,$bowser,$peach];

$jsonString = json_encode($dataObject);

echo $jsonString;

?>