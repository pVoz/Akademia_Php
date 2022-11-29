<?php

include 'variable.php';


/* Funct_ahoj*/
function greetings($value)
{

    echo ('<pre>');
    print_r($value);
    echo ('</pre>');
};



function formater($dtime)
{

    echo  "Datum " . $dtime;
    return $dtime;
};

function compareTime($time1, $time2, $msg)
{

    if ($time1 > $time2) {
        return $msg;
    } else {
        $msg = " ";
    };

    return $msg;
};

// strtotime("čas") => premeni string na čas 

function notPossible($time)
{
    $ddtime = ($time->format('H:i:s'));
    if ($ddtime >= strtotime("20:00:00")) {

        die("Nemožný neskorý príchod ");
    };
}

function withoutName($name)
{

    if (!$name) {
        echo ("Vyplň prosím meno študenta ");
        die();
    }
};





function fileSave($stime, $time, $name)
{


    $startSchool = strtotime("08:00:00");
    $message = compareTime($stime, $startSchool, "Študent meškal !!");
    $myfile = fopen("Date-time.dat", "a+") or die("Unable to open file!");

    
    fwrite($myfile, $name . "  prišiel o  " . $time->format('d.m.Y H:i:s') . " " . $message  . PHP_EOL);
    fclose($myfile);
};

function fileGet()
{

    $file = file_get_contents("Date-time.dat", true);
    echo ('<pre>') . $file . ('</pre>');
};
