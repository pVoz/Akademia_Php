<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $value = "ahoj";


    echo ('<pre>');
    print_r($value);
    echo ('</pre>');



    $date = new DateTimeImmutable();
    echo "Datum " . $date->format('d-m-Y  (H:i:s)');


    ?>
</body>




    </html>