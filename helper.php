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
    $dtime = $date->format(' d-m-Y H:i:s');


    echo  "Datum " . $dtime;
    return $dtime;
};



function fileSave()
{

    $time = new DateTimeImmutable();
    $stime = strtotime($time->format(' H:i:s'));
    $startSchool = strtotime("08:00:00");
    $msg ="";

    if ($stime > $startSchool) {
        $msg ="študent meška!!";
    };
   
    
   
    $myfile = fopen("Date-time.dat", "a+") or die("Unable to open file!");

    fwrite($myfile, $time->format('d.m.Y H:i:s') . " " . $msg .PHP_EOL);
    fclose($myfile);
   
};

function fileGet()
{

    $file = file_get_contents("Date-time.dat", true);
    echo ('<pre>') . $file . ('</pre>');

   
};
