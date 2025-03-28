<?php

$mijnFunctionResultaat = 1;

function mijnFunction($mijnFunctionResultaat)
{
    $mijnFunctionResultaat = 1;
    print($mijnFunctionResultaat);

    return 1;
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

    mijnFunction($mijnFunctionResultaat);

    ?>
</body>
</html>