<?php

$date = new DateTimeImmutable();
$dtime = $date->format(' d.m.Y H:i:s');
$stime = strtotime($date->format(' H:i:s'));

// $_POST = je na formulár
// $_GET = je na url 

/* Funct_ahoj*/
function greetings($value)
{

    echo ('<pre>');
    print_r($value);
    echo ('</pre>');
};
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
////////////////////////////////////////////////////////
function pre_r($data)
{
    echo '<pre>';
    print_r($data);
    echo '<pre>';
}

//get file
$students = file_get_contents('students.json');

function appendStudent($studends_json, $name)
{
    
    $students_decoded = json_decode($studends_json, true);
    
    //create new id
    $new_id  = count($students_decoded) + 1;
    
    //create new studend
    $new_student = [
        'id' => $new_id,
        'name' => $name
        
    ];
    
    //append new studend
    $students_decoded[] = $new_student;
    
    $students_encoded = json_encode($students_decoded, JSON_PRETTY_PRINT);
    
    file_put_contents('students.json', $students_encoded);
}

function showStudents($studends_json)
{
    
    $students_decoded = json_decode($studends_json, true);
    
    pre_r($students_decoded);
}
if (isset($_POST) && !empty($_POST)) {
    appendStudent($students, $_POST['name']);
}

$students = file_get_contents('students.json');
showStudents($students);
