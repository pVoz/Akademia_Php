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
/* Funct_ahoj*/
function pozdrav($value) {
    
    echo ('<pre>');
    print_r($value);
    echo ('</pre>');
    
}
$value = "Ahoj";

    pozdrav($value);

   
    
    
    $date = new DateTimeImmutable();
    $dtime = $date->format(' d-m-Y (H:i:s)');
     echo  "Datum " . $dtime ;


    $myfile = fopen("Date-time.dat", "w") or die("Unable to open file!");


    fwrite($myfile, $dtime);
    fclose($myfile);



    $file = file_get_contents("Date-time.dat", true);
    echo ('<pre>') . $file . ('</pre>');

    // file_get_contents($dtime);
    
    // $homepage = file_get_contents('localhost/akademia_PhP/');
    // echo $homepage

    ?>
</body>




    </html>