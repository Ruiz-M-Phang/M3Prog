<?php

// fahrenheit.php?celsius=25
$input = 25;

$celsius = floatval($input);

$_GET['celsius'] = $celsius;

$Fahrenheit = $input * 9 / 5;

if(isset($_GET['celsius']))
{
    print_r($_GET['celsius']);
    print("° Celsius = $Fahrenheit graden Fahrenheit");
}


?>