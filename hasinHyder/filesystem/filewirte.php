<?php 

$filePath = "C:/xampp/htdocs/basic-php/hasinHyder/filesystem/textwo.txt";

$fileOpen = fopen($filePath, 'w+');

fwrite($fileOpen, "masud rana \n");
fwrite($fileOpen, "Al Amin Islam\n");
fwrite($fileOpen, "Kahini Khan\n");
fwrite($fileOpen, "Kahini Khan\n");
fclose($fileOpen);