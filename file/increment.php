<?php
$myfile = fopen("file.txt", "r") or die("Unable to open file!");

$number = fread($myfile, filesize('file.txt'));

$myfile = fopen("file.txt", "w") or die("Unable to open file!");
$number++;
fwrite($myfile, $number);
fclose($myfile);
header('Location: ../index.php');
