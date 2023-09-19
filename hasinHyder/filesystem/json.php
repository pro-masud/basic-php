<?php 

$filePath = "C:/xampp/htdocs/basic-php/hasinHyder/filesystem/json.txt";

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


$data = json_encode($students);

file_put_contents($filePath, $data, LOCK_EX);


$getData = file_get_contents($filePath);

$updateData = json_decode($getData);

print_r($updateData);

