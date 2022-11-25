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
    function greetings($value)
    {
        
        echo ('<pre>');
        print_r($value);
        echo ('</pre>');
    };
    
    
    
    function formater()
    {
        $date = new DateTimeImmutable();
        $dtime = $date->format(' d-m-Y (H:i:s)');
        echo  "Datum " . $dtime;
        return $dtime;
    };
    
    
        
    greetings("Ahoj");
    

   
    $date_time=formater();
    
    
    function fileSave($date_time)
    {
        $myfile = fopen("Date-time.dat", "w") or die("Unable to open file!");
        
    fwrite($myfile, $date_time);
    fclose($myfile);
    

    };

    function fileGet()
    {
        $file = file_get_contents("Date-time.dat", true);
    
        echo ('<pre>') . $file . ('</pre>');
    };

    fileSave($date_time);
    
    fileGet();




    // function test($data = null)
    // {
    //     if ($data){
    //         echo $data;
    //     }
    //     else {
    //         echo "niesu data";
    //     }
    // };

    // test("data");







?>

</body>




</html>