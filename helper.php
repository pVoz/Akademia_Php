<?php

$date = new DateTimeImmutable();
$dtime = $date->format(' d.m.Y H:i:s');
$stime = strtotime($date->format(' H:i:s'));
// $name =  $_POST["name"];

/* Funct_ahoj*/
function greetings($value)
{

    echo ('<pre>');
    print_r($value);
    echo ('</pre>');
};


// $_POST = je na formulár
// $_GET = je na url 



if ($_POST) {
    $name = $_POST["name"];
};

if ($_GET) {
    $name = $_GET["name"];
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
    };

    return $msg = " ";
};

// strtotime("čas") => premení string na čas 

function notPossible($time)
{
    $ddtime = ($time->format('H:i:s'));
    if ($ddtime >= strtotime("20:00:00")) {

        die("Nemožný neskorý príchod ");
    };
}

function validateName($name)
{

    if (!$name) {
        echo ("Vyplň prosím meno študenta ");
        die();
    }
};

if (!empty($_POST)) {
    $student = fopen("studenti.json", "a+");

    $name = (object)[
        'name' => $_POST['name']
    ];
    fwrite($student, json_encode($_POST) . PHP_EOL);
    fclose($student);
};


function fileSave($stime, $time, $name)
{


    $startSchool = strtotime("08:00:00");
    $message = compareTime($stime, $startSchool, '<h2>Študent meškal !!</h2>');
    $myfile = fopen("Date-time.dat", "a+") or die("Unable to open file!");



    fwrite($myfile, $name . "  prišiel o  " . $time->format('d.m.Y H:i:s') . " " . $message  . PHP_EOL);

    fclose($myfile);
};

function fileGet()
{

    $file = file_get_contents("Date-time.dat", true);
    echo ('<pre>') . $file . ('</pre>');
};
