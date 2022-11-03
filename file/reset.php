<?php

$number = 0;
$myfile = fopen("file.txt", "w") or die("Unable to open file!");
fwrite($myfile, $number);
fclose($myfile);
header('Location: ../index.php');
