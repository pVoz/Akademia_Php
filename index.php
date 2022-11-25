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
    $dtime = $date->format('d-m-Y  (H:i:s)');
        echo  "Datum " . $dtime ;


    // $dtimes = [$date];   

    $myfile = fopen("Date-time.dat", "a+") or die("Unable to open file!");
    // $txt = "Jane Doe\n";

// $msg = "". $date . "";

    fwrite($myfile, $dtime);
    fclose($myfile);



    ?>
</body>




    </html>