<?php

// fahrenheit2.php?celsius=20
$input = 20;

$celsius = floatval($input);

$_GET['celsius'] = $celsius;

$Fahrenheit = $input * 9 / 5;

if(isset($_GET['celsius']))
{
    print_r($_GET['celsius']);
    print("° Celsius = $Fahrenheit graden Fahrenheit");
}
?>