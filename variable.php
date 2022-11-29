<?php

$date = new DateTimeImmutable();
$dtime = $date->format(' d.m.Y H:i:s');
$stime = strtotime($date->format(' H:i:s'));

?>