<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>

    <form action="index.php" method="post">
        Meno študenta : <input type="text" name="name"placeholder="name"><br>
        <input type="submit">



    </form>

    <?php

    include 'helper.php';


    greetings("Ahoj");

    saveTime($student_id, $dtime);

    validateName($name);

    dieIfArrivalNotPossible($date);

    formater($dtime);

    fileSave($stime, $date, $name);
    

    fileGet();

    ?>

</body>

</html>