<?php 

$filePath = "C:/xampp/htdocs/basic-php/hasinHyder/filesystem/serializedata.txt";

$students = [
    [
        "fname" => "Masud",
        "lname" => "Rana",
        "age"   => 18,
        "class" => 12,
        "roll"  => 001,
    ],
    [
        "fname" => "Al Amin",
        "lname" => "Islam",
        "age"   => 25,
        "class" => "BBA",
        "roll"  => 002,
    ],
    [
        "fname" => "Fatima",
        "lname" => "Khatun",
        "age"   => 18,
        "class" => 12,
        "roll"  => 003,
    ],
    [
        "fname" => "Parvej",
        "lname" => "Islam",
        "age"   => 18,
        "class" => 12,
        "roll"  => 004,
    ],
    [
        "fname" => "Monuar",
        "lname" => "Rahman",
        "age"   => 18,
        "class" => 12,
        "roll"  => 006,
    ],
];

// serivalize data here now
// $data = serialize($students);

// file_put_contents($filePath, $data, FILE_APPEND | LOCK_EX);


// unserivalize data here now

$dataFormDataBase = file_get_contents($filePath);

$allStudentData = unserialize($dataFormDataBase);

print_r($allStudentData);



unset($allStudentData[1]);


$dataserivalize = serialize($allStudentData);

file_put_contents($filePath, $dataserivalize, LOCK_EX);

