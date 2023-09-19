<?php 
$filePath = "C:/xampp/htdocs/basic-php/hasinHyder/filesystem/tex.txt";


// file is readable 
if(is_readable($filePath)){
    // file open and read mode
    $newFile = fopen($filePath, 'r');

    $cureenData = fgets($newFile);
    // echo $cureenData;
    while( $line = fgets($newFile)){
        echo $line;
    }

    echo "\n";
    echo "\n";
    rewind($newFile);
    while( $line = fgets($newFile)){
        echo $line;
    }
    
    echo "\n";
    echo "\n";

    rewind($newFile);
    while( $line = fgets($newFile)){
        echo $line;
    }

    // one function read all data
    // $data = file($filePath);

    
    // print_r($data);

    // echo $data['4'];
    
    // // one function read and get all data
    // $data = file_get_contents($filePath);

    // echo $data;
    
    // file is close 
    fclose($newFile);
}