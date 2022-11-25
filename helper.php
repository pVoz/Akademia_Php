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
?>