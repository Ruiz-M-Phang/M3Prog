<?php

// $mijnFunctionBerekening = pow(25, 10);

// function mijnBereking($mijnFunctionBerekening)
// {
//     print($mijnFunctionBerekening);

//     return pow(25, 10);
// }

function mijnFunction()
{

    return 1;
}

$mijnFunctionResultaat = mijnFunction();
echo $mijnFunctionResultaat;

function returnVariable()
{
    $result = rand();
    print($result);
    return $result;
}

function randomPower()
{
    $randomCalcultion = rand();
    $powerCalcultion = pow(
        $randomCalcultion, 
        $randomCalcultion);
    print($powerCalcultion);
    return $powerCalcultion;
}

function randomIntdiv()
{
    $randomCalcultion = rand();
    $intdivCalcultion = intdiv(
        $randomCalcultion, 
        $randomCalcultion);
    print($intdivCalcultion);
    return $intdivCalcultion;
}

function randomSqrt()
{
    $randomCalcultion = rand();
    $sqrtCalcultion = sqrt(
        $randomCalcultion);
    print($sqrtCalcultion);
    return $sqrtCalcultion;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>returns</title>
</head>
<body>
    <?php

    echo "<br>";
    echo "<br>";
    returnVariable();
    echo "<br>";
    returnVariable();
    echo "<br>";
    returnVariable();
    echo "<br>";
    echo "<br>";
    randomPower();
    echo "<br>";
    echo "<br>";
    randomIntdiv();
    echo "<br>";
    echo "<br>";
    randomSqrt();
    // mijnBereking($mijnFunctionBerekening);

    ?>
</body>
</html>