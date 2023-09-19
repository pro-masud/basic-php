<?php 
$filePath = "C:/xampp/htdocs/basic-php/hasinHyder/filesystem/tex.txt";


if(is_readable($filePath)){
    $newFile = fopen($filePath, 'r');

    $cureenData = fgets($newFile);
    // echo $cureenData;
    while( $line = fgets($newFile)){
        echo $line;
    }
    fclose($newFile);
}else{
    echo "False";
}